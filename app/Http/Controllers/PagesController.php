<?php
    namespace App\Http\Controllers;
    use App\Post;
    use App\Product;
    use App\Part;

    class PagesController extends Controller {
        public function getIndex() {
            $image = array('https://via.placeholder.com/450.png/',
            'https://via.placeholder.com/300.png/',
            'https://via.placeholder.com/150.png/');
            return view('Pages.welcome')->withPage('')->withImage($image);
        }

        public function getCat($id) {
            $data = $id;
            $post = Product::find($id);
            return view('Pages.cat')->withPost($post);
        }

        public function getAbout() {
            return view('Pages.about')->withPage('');
        }

        // public function getOne() {
        //     $data = 'one';
        //     return view('Pages.about')->withData($data);
        // }

        // public function getTwo() {
        //     $data = 'two';
        //     return view('Pages.about')->withData($data);
        // }

        public function getContact() {
            return view('Pages.contact')->withPage('');
        }

        public function getProduct() {
            $posts = Product::where('series', 'VFD')->get();
            $product =  Product::all()->first();
            $test = Part::all()->first();
            return view('Pages.product-demo')->withPosts($posts)->withProduct($product)->withTest($test)->withPage('');
        }
    }
?>
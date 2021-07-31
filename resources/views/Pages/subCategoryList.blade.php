@foreach($subcategories as $subcategory) 
  <ul>
    <li>{{ $subcategory->name}}</li>
    @if(count($subcategory->subcategory)) 
      @include('Pages.subCategoryList', ['subcategories' => $subcategory->subcategory])
    @endif
  </ul>
@endforeach
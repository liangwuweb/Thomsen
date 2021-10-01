// Switch tab and sync content for product page
let allCheckbox = document.querySelectorAll('.toggle');

// Sync Target and add active to tab
function syncTarget() {
    allCheckbox.forEach(function (item) {
        let label = document.getElementById(item.dataset.label);
        let target = document.getElementById(item.dataset.target);
        let checkboxStatus = item.checked;

        if (checkboxStatus) {
            label.classList.add('active');
            target.classList.add('show');
        } else {
            label.classList.remove('active');
            target.classList.remove('show');
        }
    });
}

// check one tab and uncheck other tab
function changeTab(obj) {
    let checkboxId = obj.dataset.for;
    let checkbox = document.getElementById(checkboxId);

    allCheckbox.forEach(function (item) {
        item.checked = false;
    })

    checkbox.checked = true;

    syncTarget();
}

// Keep the first tab checked
allCheckbox[0].checked = true;

// Initialize
syncTarget();


console.log(allCheckbox);

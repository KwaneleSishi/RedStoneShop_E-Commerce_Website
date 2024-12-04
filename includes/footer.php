<footer class="text-center" id="footer">&copy; Copyright 2023-2024 Red Stone Shop</footer>
</div>
<script>
function detailsmodal(id) {
    var data = {"id" : id};

    // Remove any existing modal to avoid duplication
    jQuery('#details-1').remove();
    jQuery('.modal-backdrop').remove();

    // Fetch and display the modal content
    jQuery.ajax({
        url: '/tutorial/detailsmodal.php',
        method: "post",
        data: data,
        success: function (response) {
            // Append the new modal content to the body
            jQuery('body').append(response);
            // Initialize the modal
            jQuery('#details-1').modal('show');
        },
        error: function () {
            alert("Something went wrong");
        }
    });;
}

</script>
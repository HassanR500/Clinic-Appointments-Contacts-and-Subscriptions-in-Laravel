<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Mediplus</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <!-- Bootstrap Icons -->
    
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        @include('layouts.backend.sidebar')

        <!-- ========================= Main ==================== -->
        <div class="main">
        @include('layouts.backend.navbar')

            @yield('content')
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    
    <script src="{{asset('backend/assets/js/main.js')}}"></script>
    
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
   
    <script>
    // Get the input element and table rows
    const searchInput = document.getElementById('searchInput');
    const rows = document.querySelectorAll('tbody tr');

    // Add an event listener to the search input for keyup event
    searchInput.addEventListener('keyup', function(event) {
        const query = event.target.value.toLowerCase(); // Get the search query in lowercase

        // Loop through all table rows and hide those that don't match the search query
        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            let rowMatchesQuery = false;

            cells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(query)) {
                    rowMatchesQuery = true;
                }
            });

            // Toggle row display based on the search query
            row.style.display = rowMatchesQuery ? '' : 'none';
        });
    });
</script>

<script>
    setTimeout(function(){
        document.getElementById('successMessage').style.display = 'none';
    }, 3000); // Message will disappear after 3 seconds (3000 milliseconds)
    
    setTimeout(function(){
        document.getElementById('errorMessage').style.display = 'none';
    }, 3000);
</script>
</body>

</html>
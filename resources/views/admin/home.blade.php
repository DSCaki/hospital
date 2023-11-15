<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

    <style>
        /* Define the scrollbar styles for the table */
        .table-responsive {
          max-height: 50vh; /* Set the maximum height for the container */
          overflow-y: auto; /* Enable vertical scrolling */
          position: relative; /* Required for the pseudo-elements */
        }

        .table-responsive::-webkit-scrollbar {
          width: 5px; /* Set the width of the scrollbar */

        }

        .table-responsive::-webkit-scrollbar-track {
          background: #f1f1f1;
          border-radius: 5px; /* Set the background color of the track */
        }

        .table-responsive::-webkit-scrollbar-thumb {
          background: #888; /* Set the color of the scrollbar thumb */
          border-radius: 5px; /* Make it round */
        }

        .table-responsive::-webkit-scrollbar-thumb:hover {
          background: #555; /* Change the color on hover */
        }
      </style>
    </head>
  <body>

    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')
        <!-- partial -->

      @include('admin.body')

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>

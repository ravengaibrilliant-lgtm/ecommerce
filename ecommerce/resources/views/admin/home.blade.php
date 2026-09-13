<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>E COMMERCE</title>

    <!-- Bootstrap CSS (required for responsiveness) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Optional: Material Design Icons -->
    <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet" />
    
    <style>
      .buy-now-btn {
        background-color: #6c5ce7;
        color: white;
        padding: 8px 12px;
        border-radius: 4px;
        font-size: 14px;
      }
      .buy-now-btn:hover {
        background-color: #5a4bcf;
      }

      /* Ensure icon buttons are touch-friendly */
      .icon-button {
        font-size: 1.5rem;
        background: none;
        border: none;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid p-0">
      <!-- Top Banner or Header Section -->
      <div class="row m-0 p-2 bg-light align-items-center justify-content-between">
        <div class="col-6 d-flex align-items-center">
          <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="buy-now-btn me-2">Buy Now</a>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
          <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/" class="text-dark me-3">
            <i class="mdi mdi-home"></i>
          </a>
          <button id="bannerClose" class="icon-button">
            <i class="mdi mdi-close text-dark"></i>
          </button>
        </div>
      </div>

      <!-- Laravel Blade Includes -->
      @include('admin.navbar')

      @include('admin.sidebar')

      @include('admin.body')

      @include('admin.scripts')
    </div>

    <!-- Bootstrap JS (for responsiveness and mobile behavior) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional: Close banner functionality -->
    <script>
      document.getElementById('bannerClose')?.addEventListener('click', function () {
        this.closest('.row').style.display = 'none';
      });
    </script>
  </body>
</html>

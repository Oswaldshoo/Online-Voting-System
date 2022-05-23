<?php 

session_start();

session_unset(); 

session_destroy();

echo "
          <script>
            alert('Thank you For youre Vote');
             </script>";

              echo "<script>
             window.location.href = 'index.php';
             </script>"; 

 ?>
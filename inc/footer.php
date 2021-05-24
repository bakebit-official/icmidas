   <!-- FOTER SECTION START -->

   <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="col-12 d-flex align-items-center justify-content-center flex-column">
                <p>Cumilla University, Cumilla, Bangladesh</p>
                <p> Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2021 Cumilla University MIDAS 2021</p>
              </div>
            </div>
          </div>
        </footer>

    <!-- FOTER SECTION START -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!------ html5shiv ----->
    <script src="vandors/html5shiv.min.js"></script>
    <!---- respondjs -->
    <script src="vandors/respond.min.js"></script>
    <!-- OwlCarousel2 -->
    <script src="vendors/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

    <!-- jquery -->
    <script>
       
      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          autoplay:true,
          autoplayTimeout: 5000,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:5
              }
          }
         
      })
    
    </script>
    <script>
       document.addEventListener("DOMContentLoaded", function(){
          // make it as accordion for smaller screens
          if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
              everydropdown.addEventListener('hidden.bs.dropdown', function () {
                // after dropdown is hidden, then find all submenus
                  this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                    // hide every submenu as well
                    everysubmenu.style.display = 'none';
                  });
              })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function(element){
              element.addEventListener('click', function (e) {
                  let nextEl = this.nextElementSibling;
                  if(nextEl && nextEl.classList.contains('submenu')) {	
                    // prevent opening link if link needs to open dropdown
                    e.preventDefault();
                    if(nextEl.style.display == 'block'){
                      nextEl.style.display = 'none';
                    } else {
                      nextEl.style.display = 'block';
                    }

                  }
              });
            })
          }
          // end if innerWidth
          }); 
    </script>
  </body>
</html>
<?php include 'header.php'; ?>
        <main class="site-content">
            <h1>Who Am I?</h1>

           <section class="heroImage center">
                <figure>
                    <img src="assets/meAndTheGirls-compressor.jpg" alt= "Meghan in Iraq with little girls">
                    <figcaption>Me hanging out with some little girls on a mission in Iraq in 2008</figcaption>
                </figure>
            </section>
            <section class="card intro">
                <ul>
                    <li>I’m a <span class="green">student</span> at Asheville-Buncombe Technical Community College <br>in the Software and Web Development Program.</li>

                    <li>I’m a <span class="green">veteran</span>.</li>

                    <li>I’m a <span class="green">dog lover</span> and an <span class="green">amateur gardener</span>.</li>

                    <li>I’m an <span class="green">idealist</span> and I have the <strong>dogged determination</strong> to achieve my goals.</li>
                </ul>
            </section>
<!--
            <section class="flex-container">
                <figure class="center">
                    <img src="assets/diploma-compressor.jpg" alt= "Meghan with Syracuse University Military Multimedia Program diploma">
                    <figcaption>Me with my diploma from <br>Syracuse University's Military <br>Motion Media Program in 2007</figcaption>
                </figure>
                <figure class="center">
                    <img src="assets/meAndTaffy-compressor.jpg" alt= "Meghan and Taffy at Camp Unleashed">
                    <figcaption>Me and my dogs, Taffy and <br>Nugget, at Camp Unleashed<br> in 2016</figcaption>
                </figure>
                <figure class="center">
                    <img src="assets/meWIthACane-compressor.jpg", alt="Meghan walking with a cane with her service dog, Taffy">
                    <figcaption>Me at a Warrior Ride event <br>with my service dog, Taffy, <br>in 2010.</figcaption>
                </figure>
          </section>
-->
           <section class="slideshow-container">
                <figure class="slideshow-outer">
                    <img id="figure-image" alt="" width="222">
                    <figcaption id="figure-caption"></figcaption>
                </figure>
                <div id="controls">
                    <button id="figure-previous-button" type="button" onclick="previous()" class="previous">&#8249;</button>
                    <button id="figure-next-button" type="button"  onclick="next()" class="next">&#8250;</button>
                </div>
            </section>
            <article>
                <h2>My Why</h2>
                <section class="card intro">
                <p>In a world where it can feel like we have no control, my goal is to help people realize their agency again through web and software driven community engagement.</p>
                </section>
            </article>
        </main>
        <script>
        document.addEventListener("DOMContentLoaded", function(event) {

          var index = 0;
          var figNextBtn = null;
          var figPrevBtn = null;
          var figImage = null;
          var figCaption = null;

          var slideShow = {

            figData: [
                { caption: "Me getting my diploma from the MMM Program at Syracuse University", src: "assets/ss/diploma-compressor.jpg"},
                { caption: "My service dog, Taffy, and I at a Warrior Ride event", src: "assets/ss/meWIthACane-compressor.jpg" },
                { caption: "My dogs, Taffy and Nugget, and I at Camp Unleashed", src: "assets/ss/meAndTaffy-compressor.jpg" },
                { caption: "Skydiving!", src: "assets/ss/skydiving.jpg" },
                { caption: "Me and my mom", src: "assets/ss/blues.jpg" },
                { caption: "Camp Hope Unleashed", src: "assets/ss/camphope.jpg" },
                { caption: "Deployed to Pakistan in 2003", src: "assets/ss/desert.jpg" },
                { caption: "We love Halloween!", src: "assets/ss/halloween.jpg" },
                { caption: "On a mission in Iraq", src: "assets/ss/helmet.jpg" },
                { caption: "Kayaking with Taffy", src: "assets/ss/kayak2.jpg" },
                { caption: "Movember with Moose", src: "assets/ss/movember.jpg" },
                { caption: "Nugget!", src: "assets/ss/nugget.jpg" },
                { caption: "Deployment to Saudi Arabia spring 2001", src: "assets/ss/saudi.jpg" },
                { caption: "On our way to see the Statue of Liberty!", src: "assets/ss/statueofliberty.jpg" },
                { caption: "Me and Jess at a Warrior Ride event", src: "assets/ss/warriorride.jpg" }
            ],

            init: function() {

              figNextBtn = document.getElementById("figure-next-button");
              figPrevBtn = document.getElementById("figure-previous-button");
              figImage = document.getElementById("figure-image");
              figCaption = document.getElementById("figure-caption");

              figNextBtn.addEventListener('click', function(){
                slideShow.goNext();
              });

              figPrevBtn.addEventListener('click', function(){
                slideShow.goPrevious();
              });

              this.updateOutput(0);
            },

            goNext: function() {
              index = (index >= this.figData.length - 1)? 0 : index+1;
              this.updateOutput(index);
            },

            goPrevious: function() {
              index = (index == 0)? this.figData.length - 1 : index-1;
              this.updateOutput(index);
            },

            updateOutput: function(currentIndex){
              figImage.src = this.figData[currentIndex].src;
              figCaption.innerHTML = this.figData[currentIndex].caption;
            }
          };

          slideShow.init();
        });

      </script>
<?php include 'footer.php'; ?>
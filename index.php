<?php include 'header.php'; ?>
       <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <main class="site-content">
            <h2>Who Am I?</h2>
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
                <h3>My Why</h3>
                <section class="card intro">
                <p>In a world where it can feel like we have no control, my goal is to help people realize their agency again through web and software driven community engagement.</p>
                </section>
            </article>
            
            <hr>
            
<!----------------I'M DOING STUFF PAGE------------------>
            <h2 id="doing_stuff">What am I up to?</h2>

            <article id="widgets">
                <h3>I'm a student <br><img src="assets/abtech.png" alt="AB Tech logo"></h3>
                <section>
                    <p>As a student at Asheville-Buncombe Technical Community College in the <a href="https://www.abtech.edu/academics/academic-programs/business-and-hospitality-education/information-technology-software-and" target="_blank">Software and Web Development A.A.S. Program</a>, I’ve been on
                    the <strong>President’s list</strong> every semester since I started attending.</p>
                    <p>I'm also a member of the <strong>Phi Theta Kappa Honor Society</strong></p>
                </section>

                <h3>Code for Asheville<br> <img src="assets/code-for-asheville-condensed.png" alt= "Code For Asheville Logo" width="84" height="30"></h3>
                <section>
                    <p>I'm an active member of <a href="http://www.codeforasheville.org/" target="_blank">Code for Asheville</a>, a <strong>community volunteer civic technology organization</strong>.</p>
                    <p>I am an <strong>editor for the bimonthly newsletter</strong> and write the section covering news from other Code for America brigades</p>
                    <p>I participated in the effort to petition the Asheville City Council for <strong>Police Accountability Through Data Transparency</strong>, helping to collect <em>nearly 1000 signatures</em> from the community and disseminating information to the local press
                    </p>
                </section>

                <h3>WordPress<br> <img src="assets/wordpress.svg" alt= "Wordpress Logo" width="40" height="40"></h3>
                <section>
                    <p>I am <strong>redesigning</strong> the website for a local glass artist in WordPress</p>
                    <p>In addition to this website, I also keep a <a href="https://meghanmduprey.wordpress.com/" target="_blank">Wordpress blog</a> to document my learning and compile lists of my favorite resources</p>
                </section>

                <h3>Rails<br> <img src="assets/rails-1.svg" alt= "Rails Logo" width="75" height="40"></h3>
                <section>
                    <p>In a break between classes, I took a class on Ruby on Rails</p>
                    <p>I find it really cool and exciting and can't wait to learn more! I'm currently working with an adjunct professor at my school to <strong>redesign the look</strong> of his Rails website</p>
                </section>

                <h3>JavaScript<br> <img src="assets/js-square.svg" alt="Javascript logo" width="40" height="40"></h3>
                <section>
                    <p>I am <strong>teaching myself</strong> JavaScript in my off time and really enjoy it</p>
                    <p>I'm currently working on Wes Bos's <a href="https://javascript30.com/" target="_blank">JavaScript 30</a> course</p>
                </section>
            </article>
            
<!------------------CONTACT PAGE------------------>
       <hr>
       <h2 id="contact">Where You Can Find Me:</h2>
                <article class="contact">
                    <section class="card">
                        <a href="https://github.com/meghanduprey" target="_blank"><img src="assets/githubgreen.png" alt="github logo"></a>
                        <a href="https://github.com/meghanduprey" target="_blank"><h2>GitHub</h2></a>
                    </section>

                    <section class="card">
                        <a href="https://meghanmduprey.wordpress.com/" target="_blank"><img src="assets/wordpressgreen.png" width="80" height="80" alt="WordPress logo"></a>
                        <a href="https://meghanmduprey.wordpress.com/" target="_blank"><h2>Blog</h2></a>
                    </section>
                    <section class="card">
                        <a href="https://www.instagram.com/meghanduprey/" target="_blank"><img src="assets/instagram.png" width="80" height="80" alt="Instagram logo"></a>
                        <a href="https://www.instagram.com/meghanduprey/" target="_blank"><h2>Instagram</h2></a>
                    </section>
                </article>
                <section class="contact-form">
                    <form method="POST" action="https://formspree.io/meghan.duprey@gmail.com" name="contact" onsubmit="return validate()">
                        <input type="text" name="name" placeholder="Your name">
                        <input type="email" name="email" placeholder="Your email">
                        <textarea name="message" placeholder="Your Message"></textarea>
                        <button type="submit">Email Me!</button>
                    </form>
                </section>
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
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
</script>

<?php include 'footer.php'; ?>
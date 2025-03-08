
  <?php require_once "../../__includes/head.php"; ?>


<script>
  jQuery(function() {
    jQuery('.header').load('../../__includes/navbar.php');
  });
</script>

<section class="header">
  <!-- Header -->
</section>

<main class="main-content">
  <section class="invisible-section">
    <div class="college-top">
      <nav class="breadcrumb">
        <a href="../../academics.php">Academics</a> &gt; <a href="#">Undergraduates</a> &gt; <span>College of Computing Studies</span>
      </nav>
      <div class="college-heading">
        <img src="../../imgs/ccs-logo-proc.png" class="logo" alt="ccs logo">
        <h2 class="college-header">College of Computing Studies</h2>
      </div>

      <div class="carousel-container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval='1500'>
              <img src="../../imgs/ccs1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval='1500'>
              <img src="../../imgs/ccs2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval='1500'>
              <img src="../../imgs/ccs3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div> <!-- End of carousel -->
      </div>

      <div class="flex-container">
        <div class="card-container">
          <div class="card">
            <div class="card-front card-1">
              <h3>College Goals</h3>
            </div>
            <div class="card-back">
                <div class="college-goals">
                <p>The college shall provide academic excellence in the field of Information and Communication Technology, with emphasis on the following goals:</p>
                
                <ol>
                  <li>Produce quality, excellent and environmentally proactive graduates imbued with gender responsiveness.&nbsp;</li>
                  <li>Achieve the highest level of accreditation and center of excellence imbued with outcomes-based education.&nbsp;</li>
                  <li>Partner with national and international industries as an outlet for research development and extension.&nbsp;</li>
                  <li>Support faculty members through faculty development programs to be competitive with the highest global standards.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="card-container">
          <div class="card">
            <div class="card-front card-2">
              <h3>College Mission</h3>
            </div>
            <div class="card-back">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>
          </div>
        </div>
        <div class="card-container">
          <div class="card">
            <div class="card-front card-3">
              <h3>College Vision</h3>
            </div>
            <div class="card-back">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- End of college-top -->

  <div class="container mt-4">
    <!-- Undergraduate Courses Label -->
    <h3 class="mb-3">Undergraduate Programs</h3>

    <div class="accordion" id="undergradAccordion">
        <!-- Bachelor of Science in Computer Science (BSCS) -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bscsCollapse">
                    Bachelor of Science in Computer Science (BSCS)
                </button>
            </h2>
            <div id="bscsCollapse" class="accordion-collapse collapse" data-bs-parent="#undergradAccordion">
                <div class="accordion-body">
                    <p><strong>Program Objectives/Outcomes:</strong></p>
                    <ul>
                        <li>Utilize effectively the concepts of computer science theories and methodologies and adapt new technologies and ideas.</li>
                        <li>Work cohesively with a team to successfully complete projects.</li>
                        <li>Pursue personal development and lifelong learning through research and graduate studies.</li>
                        <li>Communicate effectively with the computing community and society through oral and written correspondence.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bachelor of Science in Information Technology (BSIT) -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bsitCollapse">
                    Bachelor of Science in Information Technology (BSIT)
                </button>
            </h2>
            <div id="bsitCollapse" class="accordion-collapse collapse" data-bs-parent="#undergradAccordion">
                <div class="accordion-body">
                    <p><strong>Program Objectives/Outcomes:</strong></p>
                    <ul>
                        <li>Utilizes computing theories, methodologies, and mathematical concepts.</li>
                        <li>Adapts new technologies and ideas in IT-based solutions.</li>
                        <li>Solves complex computing problems through proper research.</li>
                        <li>Works effectively as a team member or leader in IT projects.</li>
                        <li>Uses technical resources efficiently to solve computing problems.</li>
                        <li>Analyzes ethical and social issues in IT and their impact.</li>
                        <li>Produces IT-related research relevant to local and global concerns.</li>
                        <li>Integrates IT-based projects for societal improvement and development.</li>
                        <li>Engages in professional growth through self-learning and postgraduate studies.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Associate in Computer Technology (ACT) -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#actCollapse">
                    Associate in Computer Technology (ACT)
                </button>
            </h2>
            <div id="actCollapse" class="accordion-collapse collapse" data-bs-parent="#undergradAccordion">
                <div class="accordion-body">
                    <p><strong>Majors:</strong></p>
                    <ul>
                        <li><em>Major in Application Development</em></li>
                        <li><em>Major in Networking</em></li>
                    </ul>
                    <p><strong>Program Objectives/Outcomes:</strong></p>
                    <ul>
                        <li>Develop strong programming skills and debugging abilities.</li>
                        <li>Analyze and design computer-based systems to meet user needs.</li>
                        <li>Understand computer networking concepts and security.</li>
                        <li>Manage and administer databases efficiently.</li>
                        <li>Develop interactive websites using modern web technologies.</li>
                        <li>Implement security measures to protect data and systems.</li>
                        <li>Troubleshoot and maintain hardware and software issues.</li>
                        <li>Develop mobile applications for different platforms.</li>
                        <li>Enhance communication and teamwork skills for IT projects.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Graduate Programs Label -->
    <h3 class="mt-5 mb-3">Graduate Programs</h3>

    <div class="accordion" id="gradAccordion">
        <!-- Master in Information Technology (MIT) -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mitCollapse">
                    Master in Information Technology (MIT)
                </button>
            </h2>
            <div id="mitCollapse" class="accordion-collapse collapse" data-bs-parent="#gradAccordion">
                <div class="accordion-body">
                    <p><strong>Program Objectives/Outcomes:</strong></p>
                    <ul>
                        <li>Demonstrate advanced IT knowledge and skills in a specialized, interdisciplinary, or multidisciplinary field of learning for professional practice.</li>
                        <li>Utilize effectively advanced knowledge and skills in Information Technology through research and software application development that address IT-related problems of the organization and recognize gender responsiveness.</li>
                        <li>Apply a significant level of expertise-based autonomy and accountability to professional leadership for innovation and research in a specialized, interdisciplinary, or multidisciplinary field.</li>
                        <li>Pursue lifelong learning through research with a highly substantial degree of independence in individual work or teams of interdisciplinary or multidisciplinary settings.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>


    </div>
  </section>
  <script src="../../JS/ccs.script.js"></script>
</main>
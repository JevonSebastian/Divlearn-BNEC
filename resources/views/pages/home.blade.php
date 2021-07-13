<x-app title="home">
    <x-slot name="navbar">

        <header class="page-header bg-colour">
            <div class="container py-5">
              <div class="row align-items-center justify-content-center">
                <div class="col-12 d-flex align-items-center justify-content-center flex-column">
                  <h1 class="my-3 text-center">English Debate Competition</h1>
                  <p class="text-center my-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi tempore itaque
                    voluptas, quae debitis
                    animi culpa asperiores iusto earum tenetur eveniet et libero natus accusantium! Ad, officia doloribus.
                    Veritatis, sapiente.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi tempore itaque
                    voluptas, quae debitis
                    animi culpa asperiores iusto earum tenetur eveniet et libero natus accusantium! Ad, officia doloribus.
                    Veritatis, sapiente.</p>
                  <button type="button" class="btn btn-outline-light btn-lg" >Read More</button>
                </div>
              </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="white" fill-opacity="1"
                d="M0,224L60,213.3C120,203,240,181,360,186.7C480,192,600,224,720,218.7C840,213,960,171,1080,160C1200,149,1320,171,1380,181.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
              </path>
            </svg>
          </header>
        
          <!-- greeting -->
          <section class="greeting">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-5 col-12 d-flex align-items-center justify-content-center my-3">
                  <img src="download.png" alt="">
                </div>
                <div class="col-md-4 col-12 my-3">
                  <h2>Greetings From Our Project Manager</h2>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores natus qui at, atque laborum
                    necessitatibus
                    dolorem officia iure inventore illo quam dolor doloribus. Eaque debitis quidem laboriosam, maiores atque
                    ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore commodi eveniet quis ad. Beatae
                    facere delectus optio cum libero, voluptatum est reiciendis maiores sed illum mollitia dolores, quaerat
                    explicabo aut.</p>
                </div>
              </div>
          </section>
        
          </div>
        
          <!-- judges -->
          <section class="judges bg-colour" id="judges-section">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="white" fill-opacity="1"
                d="M0,64L60,85.3C120,107,240,149,360,144C480,139,600,85,720,80C840,75,960,117,1080,122.7C1200,128,1320,96,1380,80L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
              </path>
            </svg>
            <div class="container ">
              <div class="row align-items-center justify-content-center">
              </div>
              <div class="col-md-12">
                <h2 class="text-center judges">Judges</h2>
              </div>
              <div class="col-md-12">
                <div class="row align-items-center justify-content-center">
        
                  <!-- judge1 -->
                  <div class="col-md-6 col-12 d-flex align-items-center justify-content-center" data-bs-toggle="modal"
                    data-bs-target="#judgeModal1">
                    <div class="judges-item d-flex justify-content-center align-items-centers flex-column">
                      <img src="download.png" height="100" alt="">
                      <h3 class="text-center">Judge 1</h3>
                    </div>
                  </div>
                  <div class="modal fade" id="judgeModal1" tabindex="-1" aria-labelledby="judgeModal1Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="judgeModal1Label">Judge 1</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi provident expedita, autem
                            aliquid officiis officia ratione laborum obcaecati magni beatae ut a magnam laudantium voluptatibus
                            voluptates ducimus consequuntur atque!</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi provident expedita, autem
                            aliquid officiis officia ratione laborum obcaecati magni beatae ut a magnam laudantium voluptatibus
                            voluptates ducimus consequuntur atque!</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi provident expedita, autem
                            aliquid officiis officia ratione laborum obcaecati magni beatae ut a magnam laudantium voluptatibus
                            voluptates ducimus consequuntur atque!</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi provident expedita, autem
                            aliquid officiis officia ratione laborum obcaecati magni beatae ut a magnam laudantium voluptatibus
                            voluptates ducimus consequuntur atque!</p>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <!-- judge2 -->
                  <div class="col-md-6 col-12 d-flex align-items-center justify-content-center" data-bs-toggle="modal"
                    data-bs-target="#judgeModal2">
                    <div class="judges-item d-flex justify-content-center align-items-centers flex-column">
                      <img src="download.png" height="100" alt="">
                      <h3 class="text-center">Judge 2</h3>
                    </div>
                  </div>
                  <div class="modal fade" id="judgeModal2" tabindex="-1" aria-labelledby="judgeModal2Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="judgeModal2Label">Judge 2</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi provident expedita, autem
                            aliquid officiis officia ratione laborum obcaecati magni beatae ut a magnam laudantium voluptatibus
                            voluptates ducimus consequuntur atque!</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi provident expedita, autem
                            aliquid officiis officia ratione laborum obcaecati magni beatae ut a magnam laudantium voluptatibus
                            voluptates ducimus consequuntur atque!</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi provident expedita, autem
                            aliquid officiis officia ratione laborum obcaecati magni beatae ut a magnam laudantium voluptatibus
                            voluptates ducimus consequuntur atque!</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi provident expedita, autem
                            aliquid officiis officia ratione laborum obcaecati magni beatae ut a magnam laudantium voluptatibus
                            voluptates ducimus consequuntur atque!</p>
                        </div>
                      </div>
                    </div>
                  </div>
        
                </div>
              </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="white" fill-opacity="1"
                d="M0,224L60,208C120,192,240,160,360,170.7C480,181,600,235,720,229.3C840,224,960,160,1080,144C1200,128,1320,160,1380,176L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
              </path>
            </svg>
          </section>
        
        
          <!-- Sponsors -->
        
          <section class="sponsor mb-5">
            <div class="container text-center">
              <h2 class="mb-5">Sponsors</h2>
              <div class="card border-1 shadow" style="border-radius: 40px;">
                <div class="card-body p-5">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-md-4 col-12 my-3 d-flex justify-content-center align-items-center">
                      <img src="Bantex_Logo.png" height="50" alt="">
                    </div>
                    <div class="col-md-4 col-12 my-3 d-flex justify-content-center align-items-center">
                      <img src="Bantex_Logo.png" height="50" alt="">
                    </div>
                    <div class="col-md-4 col-12 my-3 d-flex justify-content-center align-items-center">
                      <img src="Bantex_Logo.png" height="50" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <!-- contact us -->
        
          <section class="bg-colour" id="contact-section">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="white" fill-opacity="1"
                d="M0,64L60,85.3C120,107,240,149,360,144C480,139,600,85,720,80C840,75,960,117,1080,122.7C1200,128,1320,96,1380,80L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
              </path>
            </svg>
            <h2 class="text-center mb-5" style="color: white;">Contact Us</h2>
            <div class="container py-5">
        
              <div class="row justify-content-end">
                <div class="col-md-6 col-12">
                  <div class="mb-4">
                    <h4 style="color: white;">Any Question?</h4>
                    <p style="color: white;">Feel free to ask anything, and we will contact you to asnwer it!</p>
                    <label for="exampleFormControlInput1" class="form-label" style="color: white;">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label" style="color: white;">Question</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button type="button" class="btn btn-outline-light mb-4">Send</button>
                </div>
        
                <div class="col-md-5 col-12 p-3 px-4">
                  <div class="row">
                    <div class="col-12 contact-item d-flex align-items-start justify-content-center flex-column">
                      <div class="contact-person my-3">
                        <h4>International Registration</h4>
                        <h5>Jevon Sebastian</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-whatsapp"
                          viewBox="0 0 16 16">
                          <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        <a href="https://api.whatsapp.com/send?phone=+6287855913666">+6287855913666</a><br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-instagram"
                          viewBox="0 0 16 16">
                          <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                        <a href="https://www.instagram.com/jevon_sebastian/">jevon_sebastian</a>
                      </div>
        
                      <div class="contact-person my-3">
                        <h4>National Registration</h4>
                        <h5>Jevon Sebastian</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-whatsapp"
                          viewBox="0 0 16 16">
                          <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        <a href="https://api.whatsapp.com/send?phone=+6287855913666">+6287855913666</a><br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-instagram"
                          viewBox="0 0 16 16">
                          <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                        <a href="https://www.instagram.com/jevon_sebastian/">jevon_sebastian</a>
                      </div>
                    </div>
        
        
                  </div>
                </div>
              </div>
            </div>
          </section>
    

</x-app>
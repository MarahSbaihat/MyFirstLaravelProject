@extends('layouts.master')
@section('content')
    <main role="main" class="container">
        <section style="text-align: center;">
            <div class="container">
                <h2>FAQs</h2>
                <img class="about img" src="assets/image/our/images (2).jpeg" alt="">
                <p>Here you will find answers to some common questions. If you want to inquire about anything else, do not hesitate to contact us.</p>
                <br>
                <div class="accordion shadow" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            **What services do you offer?
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We offer comprehensive interior and exterior decoration services for residential and commercial spaces. Our services include design consultation, space planning, furniture selection, color coordination, and more.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            **How do I get started with your services?
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Getting started is easy! Simply contact us through our website or give us a call to schedule an initial consultation. During the consultation, we'll discuss your needs, preferences, and project details.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            **What is your design style?
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Our design style is diverse, and we tailor our approach to match the preferences and lifestyle of our clients. Whether you prefer modern, traditional, or eclectic styles, we can create a design that reflects your taste.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            **How much does your decoration service cost?
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The cost of our services depends on the scope and complexity of the project. We provide customized quotes based on factors such as project size, materials, and design requirements. We work within various budget ranges to accommodate our clients.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            **Do you work with existing furniture and decor?
                        </button>
                      </h2>
                      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Absolutely! We can integrate existing furniture and decor into the new design, ensuring a cohesive and personalized look. We also provide recommendations for additional items if needed.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            **How long does a typical project take?
                        </button>
                      </h2>
                      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The timeline for a project varies based on its complexity and scope. During the initial consultation, we'll provide an estimated timeline for your specific project, considering factors like design phase, material selection, and implementation.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            **Can you work with a specific theme or color scheme?
                        </button>
                      </h2>
                      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes, we can! We encourage clients to share their preferred themes, color schemes, and any specific ideas they have in mind. Our team will work closely with you to incorporate your vision into the design.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            **Are you licensed and insured?
                        </button>
                      </h2>
                      <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes, we are a licensed and insured decor company. We adhere to industry standards and regulations to ensure the highest level of professionalism and quality in our services.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            **What areas do you serve?
                        </button>
                      </h2>
                      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We provide decoration services in Palestine. If you're unsure whether we cover your location, feel free to reach out, and we'll be happy to assist.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            **Do you offer a warranty on your work?
                        </button>
                      </h2>
                      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes, we stand behind the quality of our work. We provide a warranty on our services and will address any issues that may arise post-installation.
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
    </main>
@endsection

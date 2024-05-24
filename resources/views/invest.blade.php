
@include('components.header')

<!-- Content============================================= -->
<section id="content">
    <div class="content-wrap bg-light py-0">

        <div class="section mt-0 overflow-visible">
            <div class="container">
                <div class="row justify-content-center center">
                    <div class="col-lg-7">
                        <div class="heading-block border-bottom-0 mb-4">
                            <h2 class="mb-3 color">Ready to Fund? Explore Projects</h2>
                            {{--                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste reprehenderit fugiat quisquam nesciunt. Dicta quis, rem consequuntur est beatae qui.</p>--}}
                        </div>
                        <div class="input-group input-group-lg mb-4">
                            <input type="text" id="search-input" class="form-control w-auto" aria-label="Text input with dropdown button" placeholder="Search..">
                            <select id="category-filter" class="form-select col col-4">
                                <option selected value="All">All</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Education">Education</option>
                                <option value="Technology">Technology</option>
                            </select>
                            <button class="btn bg-color text-white border-0" type="button"><i class="icon-search"></i></button>
                        </div>
                        {{--                        <a class="button button-rounded" href="#" role="button">Popular</a>--}}
                        {{--                        <a class="button button-rounded button-dark button-black" href="#" role="button">Newest</a>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container clearfix">

            <div class="row justify-content-center min-vh-100 align-items-center blocks-card-10" id="cards-container">

                <!-- COl -->
                <div class="col-lg-4 col-md-6 pb-5" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Fashion</span>
                            <h4 class="mb-2">Artificial hair implants</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Education</span>
                            <h4 class="mb-2">Uniben</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Technology" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Technology</span>
                            <h4 class="mb-2">Open AI</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Fashion</span>
                            <h4 class="mb-2">High heels</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Education</span>
                            <h4 class="mb-2">Igbobi College</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Technology</span>
                            <h4 class="mb-2">Dell Laptop</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Fashion</span>
                            <h4 class="mb-2">Wedding dress</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Education</span>
                            <h4 class="mb-2">Ojodu grammar school</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Technology</span>
                            <h4 class="mb-2">Samsung Galaxy</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Fashion</span>
                            <h4 class="mb-2">Adidas yeezy</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Education</span>
                            <h4 class="mb-2">Havard University</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Technology</span>
                            <h4 class="mb-2">Yamaha Generator</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>

                <!-- COl -->
                <div class="col-lg-4 col-md-6" data-category="Fashion" style="display: none;">
                    <!-- Card -->
                    <div class="card shadow-sm">
                        <img src="{{('img/car.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2 fw-normal px-2 py-1">Fashion</span>
                            <h4 class="mb-2">Brazilian hair</h4>
                            <p class="mb-4 op-07" style="line-height: 1.65">I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness, female pattern baldness, alopecia, beard thickening, eyebrows, etc. It is a very minor surgical procedure involving a needle poke and place of hair.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                            <div>
                                <h3 class="mb-0 h3 fw-semibold">$10000</h3>
                                <span class="op-06">minimum per investor</span>
                            </div>
                            <a href="#" class="button button-red rounded-pill m-0">More Info</a>
                        </div>
                    </div><!-- Card End-->
                </div>



            </div>

            <ul class="pagination justify-content-center mt-4" id="pagination-container">
                <!-- Pagination items will be dynamically generated here -->
            </ul>
        </div>
    </div>
</section><!-- #content end -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filter = document.getElementById('category-filter');
        const searchInput = document.getElementById('search-input');
        const cardsContainer = document.getElementById('cards-container');
        const paginationContainer = document.getElementById('pagination-container');
        const cards = document.querySelectorAll('.blocks-card-10 .col-lg-4');
        const cardsPerPage = 9;
        let currentPage = 1;

        function filterAndPaginateCards() {
            const category = filter.value;
            const searchText = searchInput.value.toLowerCase();
            let filteredCards = [];

            cards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                const cardTitle = card.querySelector('.card-body h4').textContent.toLowerCase();

                const matchesCategory = (category === 'All' || cardCategory === category);
                const matchesSearch = cardTitle.includes(searchText);

                if (matchesCategory && matchesSearch) {
                    filteredCards.push(card);
                }
            });

            displayPage(filteredCards, currentPage);
            setupPagination(filteredCards);
        }

        function displayPage(filteredCards, page) {
            const start = (page - 1) * cardsPerPage;
            const end = start + cardsPerPage;

            cards.forEach(card => {
                card.style.display = 'none';
            });

            filteredCards.slice(start, end).forEach(card => {
                card.style.display = 'block';
            });
        }

        function setupPagination(filteredCards) {
            paginationContainer.innerHTML = '';
            const pageCount = Math.ceil(filteredCards.length / cardsPerPage);

            for (let i = 1; i <= pageCount; i++) {
                const pageItem = document.createElement('li');
                pageItem.className = `page-item ${i === currentPage ? 'active' : ''}`;
                pageItem.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                pageItem.addEventListener('click', (e) => {
                    e.preventDefault();
                    currentPage = i;
                    displayPage(filteredCards, currentPage);
                    setupPagination(filteredCards);
                });
                paginationContainer.appendChild(pageItem);
            }
        }

        filter.addEventListener('change', () => {
            currentPage = 1;
            filterAndPaginateCards();
        });
        searchInput.addEventListener('input', () => {
            currentPage = 1;
            filterAndPaginateCards();
        });

        // Initial call to set up the page
        filterAndPaginateCards();
    });
</script>


@include('components.footer')

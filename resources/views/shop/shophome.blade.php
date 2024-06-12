<x-shop-layout>
    <!-- Page Content -->
    <!-- Banner Starts Here -->

            <div id="bannerCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/shop.png" class="d-block w-100" alt="Image 1" style="max-height:650px;">

                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/shop1.png" class="d-block w-100" alt="Image 2 " style="max-height: 650px";>
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/shop2.png" class="d-block w-100" alt="Image 2" style="max-height: 650px;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <!-- Add more carousel items with images and captions -->
                </div>
                <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


    <!-- Banner Ends Here -->

{{--    search and filter --}}
<center>    <div class="search-filter-container">
        <input type="text" id="searchBar" placeholder="Search..." onkeyup="filterResults()">
        <select id="authorFilter" onchange="filterResults()">
            <option value="">All Authors</option>
            <option value="Brayan Weerakoon">Brayan Weerakoon</option>
            <option value="Manjula Gunarathna">Manjula Gunarathna</option>
            <option value="Trevin Kariyawasam">Trevin Kariyawasam</option>
            <option value="Shehan Liyanage">Shehan Liyanage</option>
            <option value="Lehan De Silva">Lehan De Silva</option>
            <option value="Arun Perera">Arun Perera</option>
        </select>
        <input type="number" id="minPrice" placeholder="Min Price" onkeyup="filterResults()">
        <input type="number" id="maxPrice" placeholder="Max Price" onkeyup="filterResults()">
        <button onclick="filterResults()"><i class="fa fa-search"></i> Search</button>
    </div>
    <div id="results"></div></center>

{{--    search end here --}}

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="all-blog-posts">
                <div class="row" id="product-container">
                    @foreach ($products as $product)
                        <div class="col-md-4 col-sm-6 product-item">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('uploads/product/' . $product->image) }}" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Rs. {{ $product->price }}</span>
                                    <a><h4>{{ $product->name }}</h4></a>
                                    <p>{{ $product->description }}</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    </li>
                                                    <li><a href="{{ url('more/' . $product->id) }}">View Product</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Pagination Links -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            {{ $products->links('pagination::bootstrap-4') }} <!-- Customizing pagination view -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .blog-post {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .blog-thumb img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .blog-post:hover .blog-thumb img {
            transform: scale(1.1);
        }

        .down-content {
            padding: 15px;
            text-align: center;
        }

        .down-content h4 {
            font-size: 18px;
            font-weight: bold;
            margin: 15px 0;
            transition: color 0.3s ease;
        }

        .down-content span {
            display: block;
            font-size: 16px;
            color: #f8b500;
            margin-bottom: 10px;
        }

        .down-content p {
            font-size: 14px;
            color: #666;
            height: 60px;
            overflow: hidden;
        }

        .down-content a:hover h4 {
            color: #f8b500;
        }

        .post-tags {
            margin-top: 15px;
            list-style: none;
            padding: 0;
        }

        .post-tags li {
            display: inline;
            margin-right: 10px;
        }

        .post-tags a {
            color: #f8b500;
            transition: color 0.3s ease;
        }

        .post-tags a:hover {
            color: #333;
        }

        .pagination-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination {
            display: flex;
            align-items: center;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            display: block;
            padding: 8px 12px;
            background: #f8b500;
            color: white;
            border-radius: 5px;
            transition: background 0.3s ease, color 0.3s ease;
            font-size: 24px;
        }

        .pagination a:hover {
            background: #333;
            color: white;
        }

        .pagination .active a {
            background: #333;
            color: white;
            border-radius: 5px;
        }

        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            font-size: 12px; /* Make the arrow heads smaller */
        }

        .pagination .page-link {
            padding: 5px 10px;
            border: none;
            color: white;
            background: #f8b500;
            border-radius: 5px;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .pagination .page-link:hover {
            background: #333;
            color: white;
        }
        /*//carousel*/
        .carousel-item {
            transition: transform 0.5s ease-in-out;
            padding: 15px;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        .carousel-caption h5, .carousel-caption p {
            margin: 0;
        }

        .search-filter-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 5px;
            margin-left: 250px;
        }

        .search-filter-container input, .search-filter-container select, .search-filter-container button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-filter-container input:focus, .search-filter-container select:focus, .search-filter-container button:focus {
            outline: none;
            border-color: #007BFF;
        }

        .search-filter-container button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .search-filter-container button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });

    </script>
    <script>
        // Sample data for demonstration
        // const books = [
        //     { title: "Book 1", author: "Brayan Weerakoon", price: 20 },
        //     { title: "Book 2", author: "Manjula Gunarathna", price: 30 },
        //     { title: "Book 3", author: "Trevin Kariyawasam", price: 25 },
        //     { title: "Book 4", author: "Shehan Liyanage", price: 15 },
        //     { title: "Book 5", author: "Lehan De Silva", price: 35 },
        //     { title: "Book 6", author: "Arun Perera", price: 40 },
        // ];

        function filterResults() {
            const searchQuery = document.getElementById('searchBar').value.toLowerCase();
            const selectedAuthor = document.getElementById('authorFilter').value;
            const minPrice = parseFloat(document.getElementById('minPrice').value);
            const maxPrice = parseFloat(document.getElementById('maxPrice').value);

            const filteredBooks = books.filter(book => {
                const matchesSearchQuery = book.title.toLowerCase().includes(searchQuery);
                const matchesAuthor = selectedAuthor ? book.author === selectedAuthor : true;
                const matchesPrice = (!isNaN(minPrice) ? book.price >= minPrice : true) &&
                    (!isNaN(maxPrice) ? book.price <= maxPrice : true);
                return matchesSearchQuery && matchesAuthor && matchesPrice;
            });

            displayResults(filteredBooks);
        }

        function displayResults(books) {
            const resultsContainer = document.getElementById('results');
            resultsContainer.innerHTML = '';
            books.forEach(book => {
                const bookElement = document.createElement('div');
                bookElement.textContent = `${book.title} by ${book.author} - $${book.price}`;
                resultsContainer.appendChild(bookElement);
            });
        }

        // Initial display of all books
        displayResults(books);

    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6661f57b9a809f19fb3a513f/1hvnadrmk';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
</x-shop-layout>

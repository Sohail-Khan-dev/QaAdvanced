@extends('layout')

@section('title', 'Contact us')

@section('content')
<div class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6 text-center">Quality Assurance Advance Blogs </h1>
        <div id="blog-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Blog posts will be loaded here -->
        </div>
    </div>

    <script>
        async function fetchMediumBlogs() {
            const response = await fetch('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@zubairkhansh');
            /// "https://medium2.p.rapidapi.com/user/5142451174a3/publications"  //  "https://medium2.p.rapidapi.com/user/id_for/nishu-jain"
            const data = await response.json();
            const blogContainer = document.getElementById('blog-container');
            blogContainer.innerHTML = '';
            
            if (data && data.items) {
                data.items.forEach(post => {
                    const blogCard = document.createElement('div');
                    blogCard.className = 'bg-white rounded-lg shadow-md p-4';

                    blogCard.innerHTML = `
                        <img src="${post.thumbnail}" alt="${post.title}" class="w-full h-48 object-cover rounded-t-lg">
                        <h2 class="text-xl font-semibold mt-4">${post.title}</h2>
                        <p class="text-gray-700 mt-2">${post.description.slice(0, 100)}...</p>
                        <a href="${post.link}" target="_blank" class="text-blue-500 hover:underline mt-4 inline-block">Read More</a>
                    `;

                    blogContainer.appendChild(blogCard);
                });
            } else {
                blogContainer.innerHTML = '<p class="text-center text-gray-500">No blogs found.</p>';
            }
        }
        function getBlogs(){
            const data = null;

            const xhr = new XMLHttpRequest();
            xhr.withCredentials = true;

            xhr.addEventListener('readystatechange', function () {
                if (this.readyState === this.DONE) {
                    console.log(this.responseText);
                }
            });

            xhr.open('GET', 'https://medium2.p.rapidapi.com/');
            xhr.setRequestHeader('x-rapidapi-key', 'tuHpQNGEa5mshM5bZwkh2SXA22wmp1NLRL7jsn2W6JO7CeVADu');
            xhr.setRequestHeader('x-rapidapi-host', 'medium2.p.rapidapi.com');

            xhr.send(data);
        }
        // getBlogs();
         fetchMediumBlogs();
    </script>
</div>
@endsection


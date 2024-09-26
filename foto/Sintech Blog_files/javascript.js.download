const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button');
const posts = document.querySelectorAll('.post');

searchButton.addEventListener('click', () => {
  const searchTerm = searchInput.value.toLowerCase();
  posts.forEach((post) => {
    const postText = post.textContent.toLowerCase();
    if (postText.includes(searchTerm)) {
      post.style.display = 'block';
    } else {
      post.style.display = 'none';
    }
  });
});
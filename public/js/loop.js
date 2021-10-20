function likePost(id) {
  let element = document.querySelector('#post-' + id + ' .color-meta .likes');
  let likesText = document.querySelector(
    '#post-' + id + ' .color-meta .likes span'
  );

  if (!element.classList.contains('liked')) {
    let formData = new FormData();
    formData.append('id', id);

    fetch(settings.site_url + '/api/post/like.php', {
      method: 'POST',
      body: formData,
    })
      .then((response) => {
        if (response.status === 200) {
          element.classList.add('liked');
          likesText.innerHTML = (parseInt(likesText.innerHTML) + 1).toString();
        } else if (response.status === 400 || response.status === 403) {
          alert('Something went wrong, try again later.');
        }
      })
      .catch((error) => {
        alert('Something went wrong, try again later.');
      });
  }
}

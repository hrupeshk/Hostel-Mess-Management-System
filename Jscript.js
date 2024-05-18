document.addEventListener("DOMContentLoaded", function() {
  const loginContainer = document.querySelector('.login-container');
  const hoverContent = document.querySelector('.hover-content');

  loginContainer.addEventListener('mouseenter', function() {
    hoverContent.style.display = 'block';
  });

  loginContainer.addEventListener('mouseleave', function() {
    hoverContent.style.display = 'none';
  });

  hoverContent.addEventListener('mouseenter', function() {
    hoverContent.style.display = 'block';
  });

  hoverContent.addEventListener('mouseleave', function() {
    hoverContent.style.display = 'none';
  });
});

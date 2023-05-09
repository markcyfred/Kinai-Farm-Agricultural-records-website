<style>
  #more-info {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    animation: slide-in 0.5s forwards;
  }

  #more-info p {
    font-size: 1.2rem;
    color: #fff;
    text-align: center;
  }

  @keyframes slide-in {
    0% {
      opacity: 0;
      transform: translate(-50%, -200%);
    }
    100% {
      opacity: 1;
      transform: translate(-50%, -50%);
    }
  }

  @keyframes fade-out {
    0% {
      opacity: 1;
    }
    100% {
      opacity: 0;
    }
  }
</style>

<div class="container">
  <p>This is my home page. Here you can find some information about me and my interests.</p>
  <button id="load-more-btn">Click here for more info</button>
  <div id="more-info">
    <p>I am a web developer based in Machakos Town. I specialize in front-end development using HTML, CSS, and JavaScript.</p>
    <p>In my free time, I enjoy hiking, reading, and playing video games.</p>
  </div>
</div>

<script>
  const loadMoreBtn = document.getElementById('load-more-btn');
  const moreInfo = document.getElementById('more-info');

  loadMoreBtn.addEventListener('click', function() {
    if (moreInfo.style.display === 'none') {
      moreInfo.style.display = 'block';
      moreInfo.style.animation = 'slide-in 0.5s forwards';
      loadMoreBtn.innerText = 'Hide info';
    } else {
      moreInfo.style.animation = 'fade-out 0.5s forwards';
      setTimeout(function() {
        moreInfo.style.display = 'none';
        moreInfo.style.animation = 'none';
        const goodbyeMsg = document.createElement('p');
        goodbyeMsg.innerText = 'Have a good day!';
        goodbyeMsg.style.fontSize = '1.2rem';
        goodbyeMsg.style.color = '#fff';
        goodbyeMsg.style.textAlign = 'center';
        moreInfo.appendChild(goodbyeMsg);
      }, 500);
      loadMoreBtn.innerText = 'Click here for more info';
    }
  });
</script>

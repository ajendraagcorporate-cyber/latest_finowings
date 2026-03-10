<!-- ====== Author Box (E-E-A-T friendly, rectangular image) ====== -->

<br /><br />

   <h4>Author</h4>
   
<aside class="author-box" aria-labelledby="author-name" itemscope itemtype="https://schema.org/Person">

  <!-- Author image -->
  <div class="author-box__media">
  

    <img
      src="https://www.finowings.com/img/mukul-sir.webp"
      alt="Author photo of John Doe"
      loading="lazy"
      width="180"
      height="220"
      itemprop="image"
      class="author-box__img"
      onerror="this.onerror=null;this.src='https://www.finowings.com/wp-content/uploads/placeholder-author.jpg';"
    />
  </div>

  <!-- Author content -->
  <div class="author-box__content">
    <h3 id="author-name" class="author-box__name" itemprop="name">Dr. Mukul Agrawal</h3>
    <p class="author-box__role" itemprop="jobTitle">Founder &amp; Market Analyst, Finowings</p>

    <p class="author-box__bio" itemprop="description">
      Dr. Mukul Agrawal, the Founder of Finowings and a Guinness World Record holder, is a recognized stock market mentor, trader and investor with over 20 years of experience. In order to give investors clarity and confidence, Mr. Agrawal has written various books on the stock market and routinely shares insights on research, wealth creation, and IPOs.
    </p>



    <div class="author-box__social" aria-label="Author social profiles">
     <a class="btn btn-outline-dark btn-social" href="https://x.com/drmukulagrawal" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-dark btn-social" href="https://www.facebook.com/themukulagrawal/" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-dark btn-social" href="https://www.instagram.com/themukulagrawal/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-outline-dark btn-social" href="https://www.linkedin.com/in/themukulagrawal/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
</aside>

<!-- ====== Minimal CSS (Rectangular image) ====== -->
<style>
.author-box{
  display:flex;
  flex-direction:row;
  gap:20px;
  align-items:flex-start;
  padding:20px;
  border:1px solid #e6e6e6;
  background:#ffffff;
  border-radius:12px;
  max-width:900px;
  margin:24px auto;
  box-shadow:0 4px 18px rgba(18, 18, 18, 0.04);
  font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
}
.author-box__media{
  flex:0 0 180px;
}
.author-box__img{
  width:180px;
  height:220px;
  object-fit:cover;
  border-radius:8px; /* Rectangular with slight curve */
  border:2px solid rgba(0,0,0,0.06);
  box-shadow:0 2px 8px rgba(0,0,0,0.08);
}

.author-box__content{
  flex:1 1 auto;
}
.author-box__name{
  margin:0 0 4px 0;
  font-size:18px;
  color:#0b2340;
  font-weight:600;
}
.author-box__role{
  margin:0 0 10px 0;
  font-size:14px;
  color:#53667a;
}
.author-box__bio{
  margin:0 0 14px 0;
  font-size:15px;
  color:#263238;
  line-height:1.6;
  max-width:66ch;
}
.author-box__meta{
  display:flex;
  gap:12px;
  flex-wrap:wrap;
  margin-bottom:8px;
}
.author-box__link{
  font-size:13px;
  text-decoration:none;
  color:#0b66c3;
  padding:6px 10px;
  border-radius:6px;
  border:1px solid rgba(11,102,195,0.08);
}
.author-box__link:hover{ text-decoration:underline; }

.author-box__social{
  display:flex;
  gap:10px;
  flex-wrap:wrap;
}
.social-link{
  font-size:13px;
  text-decoration:none;
  color:#444;
  padding:6px 10px;
  border-radius:6px;
  border:1px solid rgba(0,0,0,0.08);
}
.social-link:hover{ color:#0b66c3; border-color:rgba(11,102,195,0.12); }

/* Responsive: stack on small screens */
@media (max-width:600px){
  .author-box{
    flex-direction:column;
    align-items:flex-start;
  }
  .author-box__media{ flex:0 0 auto; }
  .author-box__img{ width:100%; height:auto; max-height:300px; }
}
</style>

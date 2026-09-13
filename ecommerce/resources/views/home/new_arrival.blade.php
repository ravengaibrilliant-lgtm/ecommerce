<section class="arrival_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 image-container">
        <img src="images/cooling2.jpeg" alt="Cooling System">
      </div>
      <div class="col-md-6 text-container">
        <div class="heading_container">
          <h2>Services</h2>
        </div>
        <p class="service-description">
          <h3>We provide exceptional services that drive success and deliver measurable results</h3>
        </p>
      </div>
    </div>
  </div>
</section>
<style>
   .arrival_section {
  padding: 60px 0;
}

.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.image-container,
.text-container {
  flex: 1;
  min-width: 300px;
}

.image-container img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.text-container {
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.heading_container h2 {
  font-size: 2rem;
  margin-bottom: 20px;
}

.service-description h3 {
  font-size: 1.25rem;
  color: #555;
  margin-top: 10px;
}

@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  .text-container {
    padding: 15px;
  }
}

   </style>
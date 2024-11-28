<title>SpaceChat</title>
   <link rel="stylesheet" href="vizsga.css" >
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

  <link rel="stylesheet" href="vizsga.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <style>
        
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Arial', sans-serif;
        background-color: #0b0b45;
        color: #fff;
        overflow-x: hidden;
        font-size: 16px;
      }

      
      header {
        text-align: center;
        padding: 100px 0;
        background-image: url('./hatter3.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
      }

      header .logo h1 {
        font-size: 4rem;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
      }

      header .logo p {
        font-size: 1.2rem;
        margin-top: 10px;
        text-shadow: 0 0 8px rgba(255, 255, 255, 0.6);
      }

      
      .intro {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3)), url('stars-background.jpg');
        background-size: cover;
        background-position: center;
        padding: 60px 20px;
        text-align: center;
      }

      .intro .content h2 {
        font-size: 3rem;
        color: #fff;
        margin-bottom: 20px;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
      }

      .intro .content p {
        font-size: 1.5rem;
        color: #fff;
        margin-bottom: 30px;
        text-shadow: 0 0 8px rgba(255, 255, 255, 0.5);
      }

      .explore-btn {
        background-color: #1e3c72;
        color: #fff;
        border: none;
        padding: 15px 30px;
        font-size: 1.2rem;
        cursor: pointer;
        border-radius: 50px;
        text-transform: uppercase;
        transition: background-color 0.3s ease;
      }

      .explore-btn:hover {
        background-color: #2a5271;
      }

   
      footer {
        text-align: center;
        padding: 20px;
        background-color: #0b0b45;
        position: relative;
      }

      footer p {
        font-size: 1rem;
        color: #fff;
        margin-top: 10px;
      }

   </style>


<body>
  <header>
    
  </header>
  <div class="container-fluid">
      <div class="row">
            <div class="col-md-3">
            <div class="logo">
            <h2>Csatlakozz a chateléshez!</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>>
         </div>
      </div>

      <div class="col-md-6">
         <div id="chat-box"></div>
            <section class="intro">
               <div class="content">
               <h1>SpaceChat</h1>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
               <button class="explore-btn">Felfedezés</button>
            </section>
        </div>
      </div>
      <div class="col-md-3">

      </div>
    </div>
  </div>
  

  <footer>
    <p>&copy; 2024 Űr Felfedezés. Minden jog fenntartva.</p>
  </footer>
</body>
</html>
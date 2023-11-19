<!DOCTYPE html>
<html lang="en">
<head>
	<title>Responsive Bootstrap Web Template</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<h1 class="text-center bg-dark text-primary p-3">Responsive Bootstrap Web Template</h1>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HIST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<h2 class="my-3">Responsive Bootstrap Template <span class="badge bg-info">New</span></h2>

			<div class="card-group">
				<div class="card text-center" style="width: 18rem;">
				  <img src="image/d.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Mohsin Ali</h5>
				    <p class="card-text">PHP Developer</p>
				    <a href="#" class="btn btn-primary">About</a>
				  </div>
				</div>

				<div class="card text-center" style="width: 18rem;">
				  <img src="image/c.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Gaffar Ali</h5>
				    <p class="card-text">Java Developer</p>
				    <a href="#" class="btn btn-primary">About</a>
				  </div>
				</div>
			</div>

			<button type="button" class="btn btn-primary float-start my-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Contact
			</button>

			<button type="button" class="btn btn-primary float-end my-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Contact
			</button>

			</div>
			<div class="col-6">
				<figure class="figure my-5">
				  <img src="image/b.jpg" class="figure-img img-fluid rounded-start-pill" alt="...">
				  <figcaption class="figure-caption">Image 1.1</figcaption>
				</figure>
			</div>
		</div>
		<div class="spinner-border text-info my-5" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>




	<div class="alert alert-primary text-center" role="alert">
		Welcome!
	</div>




	<div class="row p-5">
		<div id="carouselExampleCaptions" class="carousel slide">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="image/d.jpg" class="d-block w-100" alt="No Images">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Toys</h5>
		        <p>Plastic Animals</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="image/c.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Toy</h5>
		        <p>Smiling Bear</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="image/e.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>PHP</h5>
		        <p>Zoomed Screen</p>
		      </div>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
	</div>






	<div class="progress my-5" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
		<div class="progress-bar bg-dark" style="width: 75%">75%</div>
	</div>
	<div class="progress my-5" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
	  <div class="progress-bar progress-bar-striped bg-danger" style="width: 100%"></div>
	</div>





	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<figure class="figure my-5">
				  <img src="image/b.jpg" class="figure-img img-fluid rounded-end-pill" alt="...">
				  <figcaption class="figure-caption">Image 1.2</figcaption>
				</figure>
			</div>
			<div class="col-6">
				<h2 class="my-3">Responsive Bootstrap Template <span class="badge bg-success">New</span></h2>

			<div class="card-group">
				<div class="card text-center" style="width: 18rem;">
				  <img src="image/e.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Ahsan Ali</h5>
				    <p class="card-text">Java Developer</p>
				    <a href="#" class="btn btn-primary">About</a>
				  </div>
				</div>

				<div class="card text-center" style="width: 18rem;">
				  <img src="image/d.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Abdullah Khan</h5>
				    <p class="card-text">PHP Developer</p>
				    <a href="#" class="btn btn-primary">About</a>
				  </div>
				</div>
			</div>

			<button type="button" class="btn btn-primary float-start my-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Contact
			</button>

			<button type="button" class="btn btn-primary float-end my-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Contact
			</button>

			</div>
		</div>
		<div class="spinner-border text-danger my-5" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>




	<div class="p-3">
		<table class="table my-5">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">First</th>
		      <th scope="col">Last</th>
		      <th scope="col">Handle</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Mohsin</td>
		      <td>Ali</td>
		      <td>@mdo</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Gaffar</td>
		      <td>Ali</td>
		      <td>@fat</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td colspan="2">Perry the Platypus</td>
		      <td>@twitter</td>
		    </tr>
		  </tbody>
		</table>
	</div>





		<div class="mb-3 p-3">
		  <label for="exampleFormControlInput1" class="form-label">Email address</label>
		  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		</div>
		<div class="mb-3 p-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
		  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>





		<div class="p-3">
			<form class="row g-3 needs-validation" novalidate>
			  <div class="col-md-4">
			    <label for="validationCustom01" class="form-label">First name</label>
			    <input type="text" class="form-control" id="validationCustom01" value="Mohsin" required>
			    <div class="valid-feedback">
			      Looks good!
			    </div>
			  </div>
			  <div class="col-md-4">
			    <label for="validationCustom02" class="form-label">Last name</label>
			    <input type="text" class="form-control" id="validationCustom02" value="Sahito" required>
			    <div class="valid-feedback">
			      Looks good!
			    </div>
			  </div>
			  <div class="col-md-4">
			    <label for="validationCustomUsername" class="form-label">Username</label>
			    <div class="input-group has-validation">
			      <span class="input-group-text" id="inputGroupPrepend">@</span>
			      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
			      <div class="invalid-feedback">
			        Please choose a username.
			      </div>
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label for="validationCustom03" class="form-label">City</label>
			    <input type="text" class="form-control" id="validationCustom03" required>
			    <div class="invalid-feedback">
			      Please provide a valid city.
			    </div>
			  </div>
			  <div class="col-md-3">
			    <label for="validationCustom04" class="form-label">State</label>
			    <select class="form-select" id="validationCustom04" required>
			      <option selected disabled value="">Choose...</option>
			      <option>...</option>
			    </select>
			    <div class="invalid-feedback">
			      Please select a valid state.
			    </div>
			  </div>
			  <div class="col-md-3">
			    <label for="validationCustom05" class="form-label">Zip</label>
			    <input type="text" class="form-control" id="validationCustom05" required>
			    <div class="invalid-feedback">
			      Please provide a valid zip.
			    </div>
			  </div>
			  <div class="col-12">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
			      <label class="form-check-label" for="invalidCheck">
			        Agree to terms and conditions
			      </label>
			      <div class="invalid-feedback">
			        You must agree before submitting.
			      </div>
			    </div>
			  </div>
			  <div class="col-12">
			    <button class="btn btn-primary" type="submit">Submit form</button>
			  </div>
			</form>
		</div>





	<div class="accordion my-5" id="accordionExample">
	  <div class="accordion-item">
	    <h2 class="accordion-header">
	      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	        What?
	      </button>
	    </h2>
	    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
	      <div class="accordion-body">
	        <strong>This is the first FAQ</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
	      </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	        Why?
	      </button>
	    </h2>
	    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
	      <div class="accordion-body">
	        <strong>This is the second FAQ</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
	      </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	        Where?
	      </button>
	    </h2>
	    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
	      <div class="accordion-body">
	        <strong>This is the third FAQ</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
	      </div>
	    </div>
	    <div class="accordion-item">
	    <h2 class="accordion-header">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
	        Who?
	      </button>
	    </h2>
	    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
	      <div class="accordion-body">
	        <strong>This is the forth FAQ</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
	      </div>
	    </div>
	    <div class="accordion-item">
	    <h2 class="accordion-header">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
	        When?
	      </button>
	    </h2>
	    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
	      <div class="accordion-body">
	        <strong>This is the fifth FAQ</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
	      </div>
	    </div>
	  </div>
	</div>





<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
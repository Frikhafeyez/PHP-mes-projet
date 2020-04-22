<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Inscription</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="index.php?controller=inscrit&action=add" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" required placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" required placeholder="Enter last name">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" required placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Pays</label>
                    <select name="pays" class="form-control" required>
						<option value="tunisie">tunisie</option>
						<option value="france">france</option>
						<option value="algerie">algerie</option>
					</select>
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Tel</label>
                    <input type="number" name="tel" class="form-control" id="exampleInputEmail1" required placeholder="Enter tel">
                  </div>
				  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Inscription</button>
                </div>
              </form>
            </div>
		</div>
	</div>
</div>



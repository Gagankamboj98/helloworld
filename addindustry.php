
<?php include('inc/header.php'); 

?>
            <div class="app-main__outer">
                    <div class="app-main__inner">
                        
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Industry
                                        <div class="page-title-subheading">Here is the form to add industry</div>
                                    </div>
                                </div>
                                
                                </div>
                        </div>            
                      <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add Industry</h5>
                                
								<form class="needs-validation" novalidate=""  action="inc/process.php?action=AddIndustry" method="post">
							 <input type = "hidden" name="id" value="<?php echo $users['id'];?>" required/>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-12">
                                            <label for="validationCustom01">Add Industry</label>
                                            <input type="text" class="form-control" id="validationCustom01" name="industry" placeholder=""/>
                                              <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
										</div>
										 
										 
                                    </div>
                                     
                                    <button class="btn btn-primary" type="submit" style="width:10%; margin:20px;">ADD</button>
									
                                </form>
            
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
                            </div>
                        </div>           
</div>
<?php include('inc/footer.php');  ?>
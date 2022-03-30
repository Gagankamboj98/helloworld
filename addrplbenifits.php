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
                                    <div>RPL 
                                        <div class="page-title-subheading">Add Rpl</div>
                                    </div>
                                </div>
                                
                                </div>
                        </div>            
                      <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">The Benifits Of Rpl </h5>
                                
								<form class="needs-validation" novalidate="" action="inc/process.php?action=AddRplBenifits" method="post"enctype="multipart/form-data">
								 <input type = "hidden" name="id" value="<?php echo $RPL['id'];?>" required/>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-12">
                                            <label for="validationCustom01">Title</label>
                                          <input  name="title" class="form-control" id="validationCustom0022"> 
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
										</div>
										<br>
										<div class="form-row">
                                        <div class="col-md-12 mb-12">
                                            <label for="validationCustom02">Content</label>
											<textarea cols="100" rows="5" name="content" class="form-control" id="validationCustom022"> </textarea>
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
										</div>
										<br>
									 <div class="form-row">
                                        <div class="col-md-12 mb-12">
                                            <label for="validationCustom02">Image</label>
											<input type="file" name="image" value=""/> 
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
										</div>
                                    </div>
                                       <br>
                                    <button class="btn btn-primary" type="submit" style="width:10%; margin:20px;">Add</button>
									
                                </form>
            
                              
                            </div>
                        </div>           
</div>
 <!--Footer  -->
<?php include('inc/footer.php'); ?>
 
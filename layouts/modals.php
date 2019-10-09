    <!-- label -->
    <div class="modal fade" id="label">
        <div class="modal-dialog">
          <div class="modal-content">
  
            <!-- Modal body -->
            <div class="modal-body">
              <form action="logic/labelFile.php" method="post">
                <p class="mb-1">label:</p>
                <div class="input-group input-group-sm mb-2">
                  <input type="text" class="form-control" name='id' hidden placeholder="label">
                  <input type="text" class="form-control" name='label' placeholder="label">
                </div>
                <div class="d-flex">
                  <button type="submit" name="send" class="btn btn-sm btn-success ml-auto">create</button>
                  <button type="button" class="btn btn-sm btn-danger ml-2" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
            <!-- End Modal body -->
  
          </div>
        </div>
      </div>
      <!-- End label -->

      <!-- Rename -->
      <div class="modal fade" id="rename">
          <div class="modal-dialog">
            <div class="modal-content">
    
              <!-- Modal body -->
              <div class="modal-body">
                <form action="logic/renameFile.php" method="post">
                  <p class="mb-1">Rename:</p>
                  <div class="input-group input-group-sm mb-2">
                    <input type="text" class="form-control" name='id' hidden placeholder="Rename">
                    <input type="text" class="form-control" name='oldfilename' hidden placeholder="Rename">
                    <input type="text" class="form-control" name='filename' placeholder="Rename">
                  </div>
                  <div class="d-flex">
                    <button type="submit" name="send" class="btn btn-sm btn-success ml-auto">Rename</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
              <!-- End Modal body -->
    
            </div>
          </div>
        </div>
        <!-- End Rename -->

      <!-- Remove -->
      <div class="modal fade" id="remove">
        <div class="modal-dialog">
          <div class="modal-content">
  
            <!-- Modal body -->
            <div class="modal-body">
              <p class="text-center mb-2"></p>
              <div class="d-flex">
                <button id="btn-remove" type="button" name="send" class="btn btn-sm btn-success ml-auto">Remove</button>
                <button type="button" class="btn btn-sm btn-danger ml-2" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- End Modal body -->
    
          </div>
        </div>
      </div>
      <!-- End Remove -->

      <!-- Download -->
      <div class="modal fade" id="download">
        <div class="modal-dialog">
          <div class="modal-content">
  
            <!-- Modal body -->
            <div class="modal-body">
              <p class="text-center mb-2">Download Disola konituse tadiola konituse tadiola.jpg ?!</p>                
              <div class="d-flex">
                <a href="#" class="btn btn-sm btn-success ml-auto">Download</a>
                <button type="button" class="btn btn-sm btn-danger ml-2" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- End Modal body -->
          
          </div>
        </div>
      </div>
      <!-- End Download -->

      <!-- Upload -->
      <div class="modal fade" id="upload">
        <div class="modal-dialog">
          <div class="modal-content">
  
            <!-- Modal body -->
            <div class="modal-body">
              <form action="logic/upload.php" method="post" enctype="multipart/form-data">
                <div class="upload-btn-wrapper">
                  <input type="file" name="file"/>
                </div>
                <div class="d-flex">
                  <button type="submit" name="send" class="btn btn-sm btn-success ml-auto">Upload</button>
                  <button type="button" class="btn btn-sm btn-danger ml-2" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
            <!-- End Modal body -->
    
          </div>
        </div>
      </div>
      <!-- End Upload -->

      <!-- About -->
      <div class="modal fade" id="about">
        <div class="modal-dialog">
          <div class="modal-content px-3">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">About</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div class="about-apps border-bottom py-3">
                <h5>NG FileStorage</h5>
                <p>NG FileStorage merupakan aplikasi penyimpanan data berbasis website, aplikasi ini menjadikan komputer server sebagai pusat penyimpana data-data. dengan aplikasi ini, para pengguna yang memiliki hak akses (login) bisa mengolah ( upload,rename,download,hapus ) data yang ada di komputer server di perangkat, dimanapun dan kapanpun dengan syarat komputer tersebut harus terhubung dengan server.</p>
              </div>
              <div class="about-author py-3">
                <h5>Author</h5>
                <div class="author-img w-40 mx-auto">
                  <img src="asset/img/author.jpg" alt="">
                </div>
                <div class="text-center py-1 mb-4">
                  <h5>Muhamad Rifky</h5>
                  <p><span class="badge badge-secondary">Back-End Depelover</span></p>
                </div>
                <div class="text-center">
                  <h5>Follow Me:</h5>
                  <div>
                    <a href="https://www.instagram.com/rifky.alfares/" target="_blank"><img src="asset/img/instagram.svg" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=100008057268939" target="_blank"><img src="asset/img/facebook.svg" alt=""></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- End About -->
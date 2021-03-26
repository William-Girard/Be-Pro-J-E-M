          <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" enctype="multipart/form-data" action="<?= WEBROOT ?>admin/update" method="post">
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <input class="form-control" placeholder="Name" name="nom" type="text" value="" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <input class="form-control" placeholder="Name" name="disable" type="text" disabled="disabled" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <input class="form-control" placeholder="Number" name="number" type="number" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-file">
                      <input type="file" name="pictures[]" class="custom-file-input" id="customFile1" lang="en">
                      <label class="custom-file-label" for="customFile1">Select file</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-file">
                      <input type="file" name="pictures[]" class="custom-file-input" id="customFile2" lang="en">
                      <label class="custom-file-label" for="customFile2">Select file</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-file">
                      <input type="file" name="pictures[]" class="custom-file-input" id="customFile3" lang="en">
                      <label class="custom-file-label" for="customFile3">Select file</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Example select</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary mt-4">Create</button>
                  <input type="submit" value="Send" />
                </div>
              </form>
            </div>
          </div>
   
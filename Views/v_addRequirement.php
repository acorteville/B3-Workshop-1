        <div class="container contentajoutbesoin">
            <form  action="./" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" id="client" placeholder="<?php echo $text[$language]['client']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="contactname" placeholder="<?php echo $text[$language]['contact_name']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="title" placeholder="<?php echo $text[$language]['title']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="description" placeholder="<?php echo $text[$language]['description']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="3mainkey" placeholder="<?php echo $text[$language]['3minkey']; ?>">
                </div>
                <div class="form-group">
                  <input type="date" class="form-control" id="datelastest" placeholder="<?php echo $text[$language]['start_at_the_latest']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="durationmonths" placeholder="<?php echo $text[$language]['duration']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="durationdaysweek" placeholder="<?php echo $text[$language]['frequency']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="location" placeholder="<?php echo $text[$language]['location']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="rate" placeholder="<?php echo $text[$language]['rate']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="consultantname" placeholder="<?php echo $text[$language]['frequency']; ?>">
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option>Open</option>
                        <option>Win</option>
                        <option>Lost</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="InputFile">File input :</label>
                  </br>
                  <input type="file" id="InputFile">
                </div>
                <div class="btnfix">
                    <div class="btncancel">
                        <button type="button" onclick="window.location.href='<?php echo BASESITE; ?>'" class="btn btn-default">Cancel</button>
                    </div>
                    <div class="btnsaveandshare">
                        <button type="submit" class="btn btn-default">Save & Share</button>
                    </div>
               
                </div>
              </form>
        </div>

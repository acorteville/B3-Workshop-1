        <div class="container contentajoutbesoin">
            <form>
                <div class="form-group">
                  <input type="text" class="form-control" name="client" placeholder="<?php echo $text[$language]['client']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="contactname" placeholder="<?php echo $text[$language]['contact_name']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="title" placeholder="<?php echo $text[$language]['title']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="description" placeholder="<?php echo $text[$language]['description']; ?>">
                </div>
                <div class="form-group">
                    <textarea  style="margin: 32px 0 0;" class="form-control" name="3mainkey" placeholder="<?php echo $text[$language]['3minkey']; ?>"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" inamed="3mainkey" placeholder="<?php echo $text[$language]['3minkey']; ?>"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="3mainkey" placeholder="<?php echo $text[$language]['3minkey']; ?>"></textarea>
                </div>
                <div class="form-group">
                  <input type="date" class="form-control" name="datelastest" placeholder="<?php echo $text[$language]['start_at_the_latest']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="durationmonths" placeholder="<?php echo $text[$language]['duration']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="durationdaysweek" placeholder="<?php echo $text[$language]['frequency']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="location" placeholder="<?php echo $text[$language]['location']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="rate" placeholder="<?php echo $text[$language]['rate']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="consultantname" placeholder="<?php echo $text[$language]['consultantsemails']; ?>">
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
                        <button type="button" onclick="window.location.href='<?php echo BASESITE; ?>'" class="btn btn-default"><?php echo $text[$language]['cancel']; ?></button>
                    </div>
                    <div class="btnsaveandshare">
                        <button type="submit" class="btn btn-default"><?php echo $text[$language]['saveandshare']; ?></button>
                    </div>
               
                </div>
              </form>
        </div>

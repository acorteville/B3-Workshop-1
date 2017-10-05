        <div class="container contentajoutbesoin">
            <form action="new-requirement.html" method="POST">
                <div class="form-group">
                    <select name="client" required class="form-control">
                        <?php 
                        foreach ($clients as $client) {
                            echo "<option value='".$client->id."'>";
                            echo $client->corporatename;
                            echo "</option>";
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="contactname" required placeholder="<?php echo $text[$language]['contact_name']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="title" required placeholder="<?php echo $text[$language]['title']; ?>" value="<?php echo @$requirement->title; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="description" required placeholder="<?php echo $text[$language]['description']; ?>" value="<?php echo @$requirement->description; ?>">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="3mainkey1" maxRows="3"  rows="3"  required placeholder="<?php echo $text[$language]['3minkey']; ?>"></textarea>
                </div>
                <div class="form-group">
                  <input type="date" class="form-control" name="datelastest" required placeholder="<?php echo $text[$language]['start_at_the_latest']; ?>" value="<?php echo @$requirement->startlastdate; ?>">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="durationmonths" required placeholder="<?php echo $text[$language]['duration']; ?>" value="<?php echo @$requirement->duration; ?>">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="durationdaysweek" required placeholder="<?php echo $text[$language]['frequency']; ?>" value="<?php echo @$requirement->frequency; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="location" required placeholder="<?php echo $text[$language]['location']; ?>" value="<?php echo @$requirement->manualcoord; ?>">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="rate"  required placeholder="<?php echo $text[$language]['rate']; ?>" value="<?php echo @$requirement->rate; ?>">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="consultantname" required placeholder="<?php echo $text[$language]['consultantsemails']; ?>">
                </div>
                <div class="form-group">
                    <select name="statut" required class="form-control">
                        <option value="Open">Open</option>
                        <option value="Win">Win</option>
                        <option value="Lost">Lost</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="InputFile">File input :</label>
                  </br>
                  <input type="file" name="InputFile">
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

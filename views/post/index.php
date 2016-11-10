<main>
  <div class="container">
    <form role="form" action="<?=URL ?>post" method="post" class="col-xs-6 col-sm-6 col-md-6">
      <div class="form-group">
          <select class="form-control" name="shop">
            <option value="" disabled selected>Select Shop</option>
            <?php foreach ($this->partners as  $part): ?>
              <option value="<?= $part->p_id ?>"><?= $part->buss_name ?></option>
            <?php endforeach; ?>
          </select>
      </div>
      <div class="form-group">
        <select class="js-example-basic-multiple form-control" multiple="multiple" name="scrap_type[]">
          <?php foreach ($this->scrapTypes as  $type): ?>
            <option value="<?= $type->type_id ?>"><?= $type->scrapname ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="">Pickup Date</label>
          <input type="date" name="pickupdate" value="" class="form-control">
      </div>
       <input type="submit" value="Submit" class="btn btn-info btn-block">
    </form>
  </div>

</main>

<div class="modal" id="addCategoryModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-fw fa-list-ul mr-2"></i>New <?php echo nullable_htmlentities($category); ?> Category</h5>
                <button type="button" class="close text-white" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="post.php" method="post" autocomplete="off">
                <input type="hidden" name="type" value="<?php echo nullable_htmlentities($category); ?>">

                <div class="modal-body bg-white">

                    <div class="form-group">
                        <label>Name <strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" name="name" placeholder="Category name" required autofocus>
                    </div>

                    <label>Color <strong class="text-danger">*</strong></label>
                    <div class="form-row">

                        <?php

                        foreach ($colors_diff as $color) { ?>

                            <div class="col-3 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="color" value="<?php echo $color; ?>">
                                    <label class="form-check-label">
                                        <i class="fa fa-fw fa-3x fa-circle" style="color:<?php echo $color; ?>"></i>
                                    </label>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                </div>
                <div class="modal-footer bg-white">
                    <button type="submit" name="add_category" class="btn btn-primary text-bold"><i class="fa fa-check mr-2"></i>Create</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-2"></i>Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

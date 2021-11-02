<div class="container">
    <div class="row">
        <div class="col col-sm-4">
            <h1>Products</h1>
        </div>
        <div class="col col-sm-4 offset-sm-4 text-center">
            <a class="btn btn-info" href="<?php echo App\helper\Url::get('basket'); ?>">Basket</a>
        </div>
    </div>
    <div class="row">
        <div class="col col-sm-6 border">
            <b>Name</b>
        </div>
        <div class="col col-sm-4 border">
            <b>Price</b>
        </div>
        <div class="col col-sm-2 border">
            <b>Add to basket</b>
        </div>
    </div>
    <?php foreach($data as $product) { ?>
        <div class="row">
            <div class="col col-sm-6 border">
                <?php echo $product['name']; ?>
            </div>
            <div class="col col-sm-4 border">
                <?php echo $product['price']; ?>
            </div>
            <div class="col col-sm-2 border">
                <form action="<?php echo App\helper\Url::get('product/add'); ?>" method="post">
                    <input type="hidden" name="product" value="<?php echo $product['id']; ?>">
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
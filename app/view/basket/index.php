<div class="container">
    <div class="row">
        <div class="col col-sm-4">
            <h1>Basket</h1>
        </div>
        <div class="col col-sm-4 offset-sm-4 text-center">
            <a class="btn btn-info" href="<?php echo App\helper\Url::get('product'); ?>">Products</a>
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
            <b>Remove from basket</b>
        </div>
    </div>
    <?php 
        $total = $data['total']; unset($data['total']);
        foreach($data as $product) { ?>
        <div class="row">
            <div class="col col-sm-6 border">
                <?php echo $product['name']; ?>
            </div>
            <div class="col col-sm-4 border">
                <?php echo $product['price']; ?>
            </div>
            <div class="col col-sm-2 border">
                <form action="<?php echo App\helper\Url::get('basket/remove'); ?>" method="post">
                    <input type="hidden" name="product" value="<?php echo $product['id']; ?>">
                    <button type="submit" class="btn btn-primary">Remove</button>
                </form>
            </div>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col col-sm-6 border text-center">
            <b>TOTAL</b>
        </div>
        <div class="col col-sm-4 border">
            <?php 
                echo $total['value'];
                if($total['offer']) echo " (10% discount)";
            ?>
        </div>
    </div>
</div>
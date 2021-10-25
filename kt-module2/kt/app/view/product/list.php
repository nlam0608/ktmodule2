<div>
    <div><h1 >Danh Sach Mat Hang</h1></div>
    <div class="row">
        <div class="col-10">
            <form class="form-inline my-2 my-lg-0 ">
                <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-2">
            <a href="index.php?page=cearte-p">
                <button type="button" class="btn btn-success w-100">Success</button>
            </a>
        </div>

    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên Hàng</th>
            <th scope="col">Loại Hàng</th>
            <th ></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($products as $product): ?>
        <tr>
            <th><?php echo $product['code_id'] ?></th>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['category'] ?></td>
            <td colspan="2"><a><button type="button" class="btn btn-primary">Chi Tiet</button></a></td>
            <td><a href="index.php?page=detele-p&id=<?php echo $product['code_id'] ?>"><button type="button" class="btn btn-success">Xoa</button></a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


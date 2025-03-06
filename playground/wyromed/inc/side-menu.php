<div class="side-menu" >
    <div class="custom-scrollbar-js p-2" id="sidebar-scroll">
        <h6>MAIN MENU</h6><hr>
        <ul class="menu">
            <li class="list-menu">
                <a data-toggle="collapse" href="#sub-inbound" role="button" aria-expanded="false" aria-controls="sub-inbound"><i class="fas fa-sign-in-alt green-brand"></i> Inbound <i class="fas fa-sort-down green-brand" style="float: right"></i></a>
                <div class="collapse collapse-inbound show" id="sub-inbound">
                    <ul class="sub-menu">
                        <li class="list-menu"><a href="purchase-order.php">Purchase Order</a></li>
                        <li class="list-menu"><a href="receive-order.php">Receive Order</a></li>
                    </ul>
                </div>
            </li>
            <li class="list-menu">
                <a data-toggle="collapse" href="#sub-outbound" role="button" aria-expanded="false" aria-controls="sub-outbound"><i class="fas fa-sign-out-alt green-brand"></i> Outbound <i class="fas fa-sort-down green-brand" style="float: right"></i></a>
                <div class="collapse collapse-outbound" id="sub-outbound">
                    <ul class="sub-menu">
                        <li class="list-menu"><a href="sales-order.php">Sales Order</a></li>
                        <li class="list-menu"><a href="delivery-order.php">Delivery Order</a></li>
                        <li class="list-menu"><a href="return-sales-order.php">Return</a></li>
                    </ul>
                </div>
            </li>
            <li class="list-menu">
                <a data-toggle="collapse" href="#sub-inventory" role="button" aria-expanded="false" aria-controls="sub-inventory"><i class="fas fa-dolly-flatbed green-brand"></i> Inventory <i class="fas fa-sort-down green-brand" style="float: right"></i></a>
                <div class="collapse collapse-inventory" id="sub-inventory">
                    <ul class="sub-menu">
                        <li class="list-menu"><a href="stock-entry.php"> Stock Entry</a></li>
                        <li class="list-menu"><a href="stock-return.php"> Stock Return</a></li>
                    </ul>
                </div>
            </li>
        </ul>

        <!-- <h6>LAPORAN</h6><hr>
        <ul class="menu">
            <li class="list-menu">
                <a href=""><i class="fab fa-product-hunt green-brand"></i> Produk</a>
            </li>
            <li class="list-menu">
                <a href=""><i class="fas fa-chart-line green-brand"></i> Penjualan</a>
            </li>
            <li class="list-menu">
                <a href=""><i class="fas fa-shopping-basket green-brand"></i> Pembelian</a>
            </li>
        </ul> -->
        <hr><br/>

        <div class="dropup">
            <button type="button" class="btn btn-success btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Master <i class="fas fa-user-cog"></i></button><br/><br/>
            <div class="dropdown-menu master" style="width: 100%">
                <a class="dropdown-item" href="list-data-customer.php"><i class="fas fa-hands-helping green-brand"></i> Customers</a>
                <a class="dropdown-item" href="list-data-supplier.php"><i class="fas fa-sync-alt green-brand"></i> Suppliers</a>
                <hr>
                <a class="dropdown-item" href="list-data-user.php"><i class="fas fa-users green-brand"></i> Users</a>
            </div>
        </div>
    </div>
</div>

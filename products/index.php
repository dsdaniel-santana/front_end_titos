<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titos Burguers - Products</title>
</head>
<body>
    <header>
        <?php include_once("../includes/header.php")?>
    </header>

    <main class="container-fluid">
        <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-itens-center"></div>
            <h6>Products List</h6>

            <button class="btn btn-success">
                New Product
            </button>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="list-products"></tbody>
            </table>
        </div>
        </div>
        
    </main>

    <footer>
        <?php include_once("../includes/footer.php")?>
    </footer>
    <script>
        fetch('http://localhost/api_titosburger/products/listAll')
        .then(response =>respone.json())
        .then((response) =>{
            console.log(response);
        })
    </script>
</body>
</html>
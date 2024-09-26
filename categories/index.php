<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/mdb.min.css">
    
    
    <title>Titos Burguers - Categories</title>
    
</head>
<body>
    <header>
        <?php include_once("../includes/header.php")?>
    </header>

    <main class="container-fluid">
        <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-itens-center"></div>
            <h6>Categories List</h6>

            <button class="btn btn-success">
                New Categories
            </button>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="list-categories"></tbody>
            </table>
        </div>
        </div>
        
    </main>

    <footer>
        <?php include_once("../includes/footer.php")?>
    </footer>
    <script>
        fetch('http://localhost/api_titosburger/categories/listAll.php')
            .then(response => response.json())
            .then((response) => {
                let auxTable = "";
 
                response.categories.map(category => {
                    auxTable += `<tr>
                                    <td>${category.id_category}</td>
                                    <td>${category.category_name}</td>
                                    <td>${category.image}</td>
                                    <td>${category.id_status}</td>
                                    <td>
                                        <button onclick= "edit(${category.id_category})" class="btn btn-sm btn-primary">Edit</button>
                                        <button onclick= "pDelete(${category.id_category})" class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                   
                                </tr>
                                `;
 
                    console.log(category);
                })
 
                document.getElementById("list-categories").innerHTML = auxTable;
 
            })

            function edit(id_category){

            }

            function pDelete(id_category){
                fetch('http://localhost/api_titosburger/categories/delete.php?id=' +id_category, {
                    method: 'DELETE'
                })
                .then(response => response.json())
                .then(response => console.log(response))

            }
    </script>
</body>
</html>
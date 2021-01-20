<?php
$listUser = null;
$listCategory = null;
if (!empty($userManager)){
    $listUser = $userManager->getAllUser();
}

?>
<div class="container" role="main" style="padding: 90px 15px 0">
    <div class="row">
        <table class="table table-striped table-dark align-middle caption-top">
            <caption><h2>User list</h2></caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Password</th>
                <th scope="col">Birthday</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Money</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $n = 0;
            $maxColTable = 25; ?>
            <?php foreach ($listUser as $user): ?>
                <tr>
                    <th scope="row"><?php echo $n; ?></th>
                    <td><?php echo $user->getUserName(); ?></td>
                    <td><?php echo $user->getPassword(); ?></td>
                    <td><?php echo $user->getBirthday(); ?></td>
                    <td><?php echo $user->getPhone(); ?></td>
                    <td><?php echo $user->getEmail(); ?></td>
                    <td><?php echo $user->getMoney(); ?></td>
                    <td><?php /*echo $user->();*/ ?>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#confirmDelete">Delete
                        </button>
                    </td>
                </tr>
                <?php $n++;
                if ($n == $maxColTable) {
                    return;
                } ?>
            <?php endforeach; ?>
            </tbody>
        </table>
        <nav aria-label="User page navigation">
            <ul class="pagination justify-content-center ">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <table class="table table-striped table-dark align-middle caption-top">
            <caption><h2>Categories item list</h2></caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col" colspan="4">Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
            </tr>
            </tbody>
        </table>
        <nav aria-label="User page navigation">
            <ul class="pagination justify-content-center ">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    <!-- Confirm Delete -->
    <div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="modalConfirmDelete" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalConfirmDelete">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Confirm Delete -->
</div>
<?php
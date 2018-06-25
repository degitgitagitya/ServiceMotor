
  <div id="outtable">
    <table>
      <tr>
        <th class="short">#</th>
        <th class="normal">First Name</th>
        <th class="normal">Last Name</th>
        <th class="normal">Username</th>
      </tr>
      <?php $no=1; ?>
      <?php foreach($users as $user): ?>
        <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $user['firstname']; ?></td>
        <td><?php echo $user['lastname']; ?></td>
        <td><?php echo $user['email']; ?></td>
        </tr>
      <?php $no++; ?>
      <?php endforeach; ?>
    </table>
   </div>

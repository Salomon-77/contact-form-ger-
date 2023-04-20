

<?php $__env->startSection('title','Kontaktformular'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
  <h1>Kontaktformular</h1> 
  <?php if($errors->any()): ?>
    <div class="alert alert-danger">
      <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>    
  <?php endif; ?>

  <form method="POST" action="<?php echo e(route('index',[],false)); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="inputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" name='Username' id="inputUsername">
    </div>
    <div class="mb-3">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="text" class="form-control" name='Email' id="inputEmail">
    </div>
    <div class="mb-3">
      <label for="inputAdresse" class="form-label">Adresse</label>
      <input type="text" class="form-control" name='Adresse' id="inputAdresse">
    </div>
    <div class="mb-3">
      <label for="inputPlzOrt" class="form-label">Plz & Ort</label>
      <input type="text" class="form-control" name='Plz & Ort' id="inputPlzOrt">
    </div>
    <div class="mb-3">
      <label for="inputNachricht" class="form-label">Deine Nachricht</label>
      <textarea type="inputNachricht" class="form-control" name='Nachricht' id="inputNachricht"></textarea>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary">Speichern</button>
    </div>
    

  </form>  
</div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kontaktformular\kontaktformular\resources\views/index.blade.php ENDPATH**/ ?>
   <form method="POST" action="{{ route('update.changepassword') }}">
      @csrf
      <div class="form-row add_user_form_row">
        <div class="form-group col-md-12 mb-3">
          <label>Current Password</label>
          <input type="text" class="form-control"
                 placeholder="Enter current password" name="old_password">
          <a href="#" toggle="#password-field"
             class="fa fa-fw fa-eye field-icon toggle-password change_password_toggle"></a>
          @error('old_password')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>

      <div class="form-row add_user_form_row">
        <div class="form-group col-md-12 mb-3">
          <label>New Password</label>
          <input type="text" class="form-control" placeholder="Enter new password" name="new_password">
          <a href="#" toggle="#password-field"
             class="fa fa-fw fa-eye field-icon toggle-password change_password_toggle"></a>
          @error('new_password')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>


      <div class="form-row add_user_form_row">
        <div class="form-group col-md-12 mb-3">
          <label>Confirm New Password</label>
          <input type="text" class="form-control" placeholder="Confirm new password" name="confirm_password">
          <a href="#" toggle="#password-field"
             class="fa fa-fw fa-eye field-icon toggle-password change_password_toggle"></a>
          @error('confirm_password')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
      </div>


      <div class="form-row mt-2 admin_add_user_btns">
        <button type="submit"
                class="btn btn-primary Create_Btn Update_Password_Btn mr-2 mb-3">
          Update Password
        </button>

      </div>
    </form>

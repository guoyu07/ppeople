<?php $this->load->view('layout/header'); ?>

<div class="well well-lg margin12">
	<form method="post" action="<?php echo base_url('/user/newlaunch'); ?>">
		<input type="hidden" name="action" value="1" />
		<p>
			<label for="title">活动标题</label>
			<input type="text" name="title" id="title" class="form-control" value="" />
		</p>
		<p>
			<label for="starttime">活动开始时间</label>
			<input type="text" name="starttime" id="starttime" class="form-control" value="" />
		</p>
		<p>
			<label for="endtime">活动结束时间</label>
			<input type="text" name="endtime" id="endtime" class="form-control" value="" />
		</p>
		<p>
			<label for="cost">人均费用</label>
			<input type="text" name="cost" id="cost" class="form-control" value="" />
		</p>
		<p>
			<label for="description">活动详情</label>
			<textarea name="description" id="description" class="form-control" rows="3"></textarea>
		</p>
		<p><button type="submit" class="btn btn-lg btn-primary btn-block">发起</button></p>
	</form>
</div>

<?php $this->load->view('layout/footer'); ?>
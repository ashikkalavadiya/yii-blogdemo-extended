<div class="post">
	<div class="title">
		<table>
		    <tr>
		        <td class="span-2">
		            <?php $c = 9 - strlen(date('F', $data->create_time)); $p = str_repeat('\&\n\b\s\p\;', $c); ?>
			    <?php $this->widget('PostDate', array('ct'=>date($p.'F'.$p.'<\b\r>j', $data->create_time))); ?>
			</td>
			<td>&nbsp;<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
			</td>
		    </tr>
		</table>
	</div>
	<div class="author">
		posted by <?php echo $data->author->username . ' on ' . date('F j, Y',$data->create_time); ?>
	</div>
	<div class="content">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			$this->endWidget();
		?>
	</div>
	<div class="nav">
		<b>Tags:</b>
		<?php echo implode(', ', $data->tagLinks); ?>
		<br/>
		<?php echo CHtml::link('Permalink', $data->url); ?> |
		<?php echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?> |
		Last updated on <?php echo date('F j, Y',$data->update_time); ?>
	</div>
</div>
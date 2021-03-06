<modification>
	<id>Exporter</id>
	<version>1.0</version>
	<vqmver>2.4.1</vqmver>
	<author>Ian</author>

<file path="admin/controller/common/dashboard.php">
	<operation>
		<search><![CDATA[$data['heading_title'] = $this->language->get('heading_title');]]></search>
		<add position="after"><![CDATA[
				$data['export'] = $this->url->link('extension/module/exporter/export', 'token=' . $this->session->data['token'], true);
				$data['button_export'] = $this->language->get('button_export');
				$data['exporter_status'] = $this->config->get('exporter_status');
		]]></add>
	</operation>     
</file>   
	
<file path="admin/view/template/common/dashboard.tpl">
		<operation>
			<search><![CDATA[</ul>]]></search>
			<add position="after"><![CDATA[
			<?php if ($exporter_status == '1') {?>
			<a href="<?php echo $export; ?>" data-toggle="tooltip" title="<?php echo $button_export; ?>" class="btn btn-success"><i class="fa fa-download"></i></a>
			<?php } ?>
			]]></add>
		</operation>
</file>
	
</modification>

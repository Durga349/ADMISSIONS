<?php
	include_once("crudop/crud.php");
    $crud = new Crud();
    session_start();     
    
    $tableName =  'master_table';

    $document_no  = isset($_POST['document_no']) ? trim($_POST['document_no']) : '';
    $date  = isset($_POST['date']) ? trim($_POST['date']) : '';
    $gate  = isset($_POST['gate']) ? trim($_POST['gate']) : '';
    $flow_classify  = isset($_POST['flow_classify']) ? trim($_POST['flow_classify']) : '';
    $outlet  = isset($_POST['outlet']) ? trim($_POST['outlet']) : '';
    $department  = isset($_POST['department']) ? trim($_POST['department']) : '';    
    $gate_ent_type = isset($_POST['gate_ent_type']) ? trim($_POST['gate_ent_type']) : '';
    $vehicle  = isset($_POST['vehicle']) ? trim($_POST['vehicle']) : '';
    $sales_executive  = isset($_POST['sales_executive']) ? trim($_POST['sales_executive']) : '';
    $agent  = isset($_POST['agent']) ? trim($_POST['agent']) : '';
    $material_type  = isset($_POST['material_type']) ? trim($_POST['material_type']) : '';
    $material_trans  = isset($_POST['material_trans']) ? trim($_POST['material_trans']) : '';
    $weighing_type  = isset($_POST['weighing_type']) ? trim($_POST['weighing_type']) : '';
    $weighment_type  = isset($_POST['weighment_type']) ? trim($_POST['weighment_type']) : '';
    $weighment_req  = isset($_POST['weighment_req']) ? trim($_POST['weighment_req']) : '';
    $weigh_bridge  = isset($_POST['weigh_bridge']) ? trim($_POST['weigh_bridge']) : '';
    $outside_vehi  = isset($_POST['outside_vehi']) ? trim($_POST['outside_vehi']) : '';
    $vendor_name = isset($_POST['vendor_name']) ? trim($_POST['vendor_name']) : '';
    $ven_name_village  = isset($_POST['ven_name_village']) ? trim($_POST['ven_name_village']) : '';
    $bill_ref_no  = isset($_POST['bill_ref_no']) ? trim($_POST['bill_ref_no']) : '';
    $bill_date  = isset($_POST['bill_date']) ? trim($_POST['bill_date']) : '';
    $staff_name = isset($_POST['staff_name']) ? trim($_POST['staff_name']) : '';
    $visitor = isset($_POST['visitor']) ? trim($_POST['visitor']) : '';
    $gate_in_date  = isset($_POST['gate_in_date']) ? trim($_POST['gate_in_date']) : '';
    $gate_in_time  = isset($_POST['gate_in_time']) ? trim($_POST['gate_in_time']) : '';
    $gate_out_date    = isset($_POST['gate_out_date']) ? trim($_POST['gate_out_date']) : '';
    $gate_out_time  = isset($_POST['gate_out_time']) ? trim($_POST['gate_out_time']) : '';
    $gate_status  = isset($_POST['gate_status']) ? trim($_POST['gate_status']) : '';
    $scanner_time  = isset($_POST['scanner_time']) ? trim($_POST['scanner_time']) : '';
    $gate_voucher_no  = isset($_POST['gate_voucher_no']) ? trim($_POST['gate_voucher_no']) : '';
    $gate_voucher_date  = isset($_POST['gate_voucher_date']) ? trim($_POST['gate_voucher_date']) : '';
    $vehicle_no  = isset($_POST['vehicle_no']) ? trim($_POST['vehicle_no']) : '';
    $narration  = isset($_POST['narration']) ? trim($_POST['narration']) : '';

    $entry_type  = isset($_POST['entry_type']) ? trim($_POST['entry_type']) : '';

    $randomId       = substr(uniqid(), 0,10);

    $hdn_id         = isset($_POST['hdn_id']) ? trim($_POST['hdn_id']) : ''; 

   
if (isset($_POST['action']) && $_POST['action'] == 'maxid_gen'){
    
    $sm ="select MAX(ID) as mxid FROM ".$tableName."";
        
        $slm_data = $crud->getData($sm); 
         
         if($slm_data ==''){
            $mid = '1';
        }else{
        
        $mid = $slm_data[0]['mxid']+1;
            
        }
          $uid ='FOCUS'.$mid;
          $data = $uid;

          if($data){
            echo $data;
          }else{
            echo "false";
          }
    }     
 
      if (isset($_POST['action']) && $_POST['action'] == 'save_master'){  

        $quantity = count($_POST["quantity"]);

      if($quantity > 0){
    
      for($i = 0; $i<$quantity; $i++ ){     

      if (trim($_POST["quantity"][$i]) != '') {

         $randomId_for_goods = substr(uniqid(), 0,10);

          $item_ins = "insert into items set document_no = '".$document_no."', 
        item_name ='".$_POST['item_name'][$i]."', units = '".$_POST['units'][$i]."', quantity = '".$_POST['quantity'][$i]."', randomId ='".$randomId_for_goods."' ";
       // exit;
       $item_data = $crud->execute($item_ins);       
      }    
    }
   }

        $entry_type = "for_goodId";

        $ins_for_sql = "insert into ".$tableName." set document_no='".$document_no."',
        date='".$date."',
        gate='".$gate."',
        flow_classify='".$flow_classify."',
        outlet='".$outlet."',
        department='".$department."',
        gate_ent_type='".$gate_ent_type."',
        vehicle='".$vehicle."',
        sales_executive='".$sales_executive."',
        agent='".$agent."',
        material_type='".$material_type."',
        material_trans='".$material_trans."',
        weighing_type='".$weighing_type."',
        weighment_type  ='".$weighment_type."',
        weighment_req='".$weighment_req."',        
        weigh_bridge='".$weigh_bridge."',
        outside_vehi='".$outside_vehi."',
        vendor_name='".$vendor_name."',
        ven_name_village='".$ven_name_village."',
        bill_ref_no='".$bill_ref_no."',
        bill_date='".$bill_date."',
        staff_name='".$staff_name."',
        visitor='".$visitor."',
        gate_in_date ='".$gate_in_date."',
        gate_in_time = '".$gate_in_time."',
        gate_out_date = '".$gate_out_date."',
        gate_out_time = '".$gate_out_time."',
        gate_status = '".$gate_status."',
        scanner_time = '".$scanner_time."',
        gate_voucher_no = '".$gate_voucher_no."',
        gate_voucher_date = '".$gate_voucher_date."',
        vehicle_no = '".$vehicle_no."',
        narration = '".$narration."',
        randomId='".$randomId."'";
        // exit;
        
        $ins_document_sql = "insert into document_num set entry_type = '".$entry_type."', document_no = '".$document_no."', randomId = '".$randomId."' ";

        $res_for_data = $crud->execute($ins_for_sql);        
        $res_for_data = $crud->execute($ins_document_sql);        

        if ($res_for_data){
        echo "true";
     }else{
        echo "false";
     }
 }


 if (isset($_POST['action']) && $_POST['action'] == 'master_show'){          


     //$formshow_forgoods = "Select * from ".$tableName." where entry_type = 'for_goodId' order by id desc ";

     $formshow_forgoods ="select mt.id, mt.document_no, dl.gate, dl1.flow_classify, dl2.outlet, dl3.department, dl4.gate_ent_type, dl5.vehicle, dl6.sales_executive, dl7.agent, dl8.material_type, dl9.material_trans, dl10.weighing_type, dl11.weighment_type, dl12.weighment_req, mt.outside_vehi,dl14.vendor_name, dl15.ven_name_village, mt.bill_ref_no, mt.bill_date, dl16.staff_name, mt.visitor, mt.gate_in_date, mt.gate_in_time, mt.gate_out_date, mt.gate_out_time, dl17.gate_status, mt.scanner_time, dl18.gate_voucher_no, dl19.gate_voucher_date, mt.vehicle_no, mt.narration, mt.attachment1, mt.attachment2, mt.attachment3, mt.attachment4,mt.entry_type, mt.randomId, mt.status, mt.gate_open_status from master_table mt LEFT JOIN dropdown_lists dl on mt.gate = dl.id left join dropdown_lists dl1 on mt.flow_classify = dl1.id left join dropdown_lists dl2 on mt.outlet = dl2.id left join dropdown_lists dl3 on mt.department = dl3.id left join dropdown_lists dl4 on mt.gate_ent_type = dl4.id left join dropdown_lists dl5 on mt.vehicle = dl5.id left join dropdown_lists dl6 on mt.sales_executive = dl6.id left join dropdown_lists dl7 on mt.agent= dl7.id left join dropdown_lists dl8 on mt.material_type = dl8.id left join dropdown_lists dl9 on mt.material_trans = dl9.id left join dropdown_lists dl10 on mt.weighing_type = dl10.id left join dropdown_lists dl11 on mt.weighment_type = dl11.id left join dropdown_lists dl12 on mt.weighment_req = dl12.id left join dropdown_lists dl14 on mt.vendor_name = dl14.id left join dropdown_lists dl15 on mt.ven_name_village = dl15.id left join dropdown_lists dl16 on mt.staff_name = dl16.id left join dropdown_lists dl17 on mt.gate_status = dl17.id left join dropdown_lists dl18 on mt.gate_voucher_no = dl18.id left join dropdown_lists dl19 on mt.gate_voucher_date = dl19.id where entry_type = 'for_goodId' order by id desc ";
// exit;
   
        $formshow_data_forgoods = $crud->getData($formshow_forgoods);       

       $response = array(
        "draw" => 1,
        "recordsTotal" => count($formshow_data_forgoods),
        "data" => $formshow_data_forgoods
    );
    echo json_encode($response);
 }
    
  
?>
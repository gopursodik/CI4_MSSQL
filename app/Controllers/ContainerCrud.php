<?php 
namespace App\Controllers;
use App\Models\ContainerModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;

class ContainerCrud extends Controller
{
    // show containers list
    public function index(){
        $container_model = new ContainerModel();
        $data['containers'] = $container_model->orderBy('id', 'DESC')->findAll();
        return view('container_view', $data);
    }
    // add container form
    public function create(){
        return view('add_container');
    }
 
    // insert data
    public function store() {
        $container_model = new ContainerModel();
        $data = [
            'Container_no' => $this->request->getVar('container_no'),
            'Size'  => $this->request->getVar('size'),
            'Type' => $this->request->getVar('type'),
            'Gate_In'  => $this->request->getVar('gate_in'),
        ];
        $container_model->insert($data);
        return $this->response->redirect(site_url('/containers-list'));
    }
    // show single container
    public function singleContainer($id = null){
        $container_model = new ContainerModel();
        $data['container_obj'] = $container_model->where('id', $id)->first();
        return view('edit_view', $data);
    }

    // public function pdf($id = null){
    //     $container_model = new ContainerModel();
    //     $data['container_obj'] = $container_model->where('id', $id)->first();
    //     return view('pdf', $data);
    // }

    public function pdf($id = null)
    {
        $filename = date('y-m-d-H-i-s'). 'container-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $container_model = new ContainerModel();
        $data= $container_model->where('id', $id)->first();

        $html = "
        <table class='table'>
            <tbody>
                <tr>
                    <td>Container Number</td>
                    <td>: ".$data['Container_no']."</td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>: ".$data['Size']."</td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td>: ".$data['Type']."</td>
                </tr>
                <tr>
                    <td>Gate In</td>
                    <td>: ".$data['Gate_In']."</td>
                </tr>
            </tbody>
        </table>";

        $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }

    // update container data
    public function update(){
        $container_model = new ContainerModel();
        $id = $this->request->getVar('id');
        $data = [
            'Container_no' => $this->request->getVar('container_no'),
            'Size'  => $this->request->getVar('size'),
            'Type' => $this->request->getVar('type'),
            'Gate_In'  => $this->request->getVar('gate_in'),
        ];
        $container_model->update($id, $data);
        return $this->response->redirect(site_url('/containers-list'));
    }
 
    // delete container
    public function delete($id = null){
        $container_model = new ContainerModel();
        $data['container'] = $container_model->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/containers-list'));
    }    
}
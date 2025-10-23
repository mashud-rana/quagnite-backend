<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Playground\HelmController;
use App\Http\Controllers\Playground\DockerPlayground;
use App\Http\Controllers\Playground\GoPlayController;
use App\Http\Controllers\Playground\AwsPlayController;
use App\Http\Controllers\Playground\GcpPlayController;
use App\Http\Controllers\Playground\GitPlayController;
use App\Http\Controllers\Playground\PwsPlayController;
use App\Http\Controllers\Playground\BashPlayController;
use App\Http\Controllers\Playground\ChefPlayController;
use App\Http\Controllers\Playground\JavaPlayController;
use App\Http\Controllers\Playground\TestPlayController;
use App\Http\Controllers\Playground\AzurePlayController;
use App\Http\Controllers\Playground\MavenPlayController;
use App\Http\Controllers\Playground\ArgoCdPlayController;
use App\Http\Controllers\Playground\CentOsPlayController;
use App\Http\Controllers\Playground\GitlabPlayController;
use App\Http\Controllers\Playground\PlaygroundController;
use App\Http\Controllers\Playground\PodmanPlayController;
use App\Http\Controllers\Playground\PythonPlayController;
use App\Http\Controllers\Playground\UbuntuPlayController;
use App\Http\Controllers\Playground\AnsiblePlayController;
use App\Http\Controllers\Playground\GrafanaPlayController;
use App\Http\Controllers\Playground\JenkinsPlayController;
use App\Http\Controllers\Playground\TerraformPlayController;
use App\Http\Controllers\Playground\KubernetesMultiNodeController;
use App\Http\Controllers\Playground\KubernetesSingleNodeController;

Route::get('/playground', [PlaygroundController::class, 'index'])->name('playground.index');
Route::get('/playground-details/{slug}', [PlaygroundController::class, 'playgroundDetails'])
    ->name('playground.details');

Route::prefix('itclanbd/playground')->as('playground.')->middleware(['auth', 'is_student'])->group(function () {
    Route::get('/not-available', [PlaygroundController::class, 'notAvailable'])->name('not-available');

    Route::middleware('checkEnrollment:' . PlAYGD_PYTHON)->group(function () {
        // Python
        Route::get('/python', [PythonPlayController::class, 'index'])->name('python');
        Route::get('/python/get-mcq', [PythonPlayController::class, 'getMcq']);
        Route::post('/runPythonCode', [PythonPlayController::class, 'runPythonCode']);
    });

    Route::middleware('checkEnrollment:' . PlAYGD_GO)->group(function () {
        // Go
        Route::get('/go', [GoPlayController::class, 'index'])->name('go');
        Route::get('/go/get-mcq', [GoPlayController::class, 'getMcq']);
        Route::post('/runGoCode', [GoPlayController::class, 'runGoCode']);
    });

    Route::middleware('checkEnrollment:' . PlAYGD_BASH)->group(function () {
        // Bash
        Route::get('/bash', [BashPlayController::class, 'index'])->name('bash');
        Route::get('/bash/get-mcq', [BashPlayController::class, 'getMcq']);
        Route::post('/runBashCode', [BashPlayController::class, 'runBashCode']);
    });

    Route::middleware('checkEnrollment:' . PlAYGD_JAVA)->group(function () {
        //Java
        Route::get('/java', [JavaPlayController::class, 'index'])->name('java');
        Route::get('/java/get-mcq', [JavaPlayController::class, 'getMcq']);
        Route::post('/runJavaCode', [JavaPlayController::class, 'runJavaCode']);
    });

    Route::middleware('checkEnrollment:' . PlAYGD_AWS)->group(function () {
        // Aws
        Route::get('/aws', [AwsPlayController::class, 'index'])->name('aws');
        Route::get('/aws/lab', [AwsPlayController::class, 'labInfo'])->name('aws.lab');
        Route::get('/aws/test', [AwsPlayController::class, 'apiTest'])->name('aws.test');
        Route::get('/aws/provision', [AwsPlayController::class, 'provisionAws']);
        Route::post('/aws/labEnd', [AwsPlayController::class, 'endAwsLab']);
    });

    Route::middleware('checkEnrollment:' . PlAYGD_GCP)->group(function () {
        // GCP
        Route::get('/gcp', [GcpPlayController::class, 'index'])->name('gcp');
        Route::get('/gcp/lab', [GcpPlayController::class, 'labInfo'])->name('gcp.lab');
        Route::get('/gcp/provision', [GcpPlayController::class, 'provisionGcp']);
        Route::post('/gcp/labEnd', [GcpPlayController::class, 'endGcpLab']);
    });

    Route::middleware('checkEnrollment:' . PlAYGD_AZURE)->group(function () {
        // AZURE
        Route::get('/azure', [AzurePlayController::class, 'index'])->name('azure');
        Route::get('/azure/lab', [AzurePlayController::class, 'labInfo'])->name('azure.lab');
        Route::get('/azure/provision', [AzurePlayController::class, 'provisionAzure']);
        Route::post('/azure/labEnd', [AzurePlayController::class, 'endAzureLab']);
        Route::get('/azure/test', [AzurePlayController::class, 'apiTest']);
    });

    Route::middleware('checkEnrollment:' . PlAYGD_UOS2004)->group(function () {
        //Ubuntu
        Route::get('/ubuntu', [UbuntuPlayController::class, 'index'])->name('ubuntu');
        Route::get('/ubuntu/provision', [UbuntuPlayController::class, 'provisionLab']);
        Route::post('/ubuntu/labEnd', [UbuntuPlayController::class, 'endLab']);
        Route::post('/ubuntu/labstatus', [UbuntuPlayController::class, 'checkServerStatus'])->name('ubuntu.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_GIT)->group(function () {
        //Git
        Route::get('/git', [GitPlayController::class, 'index'])->name('git');
        Route::get('/git/provision', [GitPlayController::class, 'provisionLab']);
        Route::post('/git/labEnd', [GitPlayController::class, 'endLab']);
        Route::post('/git/labstatus', [GitPlayController::class, 'checkServerStatus'])->name('git.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_DOCKER)->group(function () {
        //Docker
        Route::get('/docker', [DockerPlayground::class, 'index'])->name('docker');
        Route::get('/docker/provision', [DockerPlayground::class, 'provisionLab']);
        Route::post('/docker/labEnd', [DockerPlayground::class, 'endLab']);
        Route::post('/docker/labstatus', [DockerPlayground::class, 'checkServerStatus'])->name('docker.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_COS8)->group(function () {
        //COS8
        Route::get('/centos', [CentOsPlayController::class, 'index'])->name('centos');
        Route::get('/centos/provision', [CentOsPlayController::class, 'provisionLab']);
        Route::post('/centos/labEnd', [CentOsPlayController::class, 'endLab']);
        Route::post('/centos/labstatus', [CentOsPlayController::class, 'checkServerStatus'])->name('centos.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_PWS)->group(function () {
        //powershell
        Route::get('/powershell', [PwsPlayController::class, 'index'])->name('powershell');
        Route::get('/powershell/provision', [PwsPlayController::class, 'provisionLab']);
        Route::post('/powershell/labEnd', [PwsPlayController::class, 'endLab']);
        Route::post('/powershell/labstatus', [PwsPlayController::class, 'checkServerStatus'])->name('powershell.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_MAVEN)->group(function () {
        //maven
        Route::get('/maven', [MavenPlayController::class, 'index'])->name('maven');
        Route::get('/maven/provision', [MavenPlayController::class, 'provisionLab']);
        Route::post('/maven/labEnd', [MavenPlayController::class, 'endLab']);
        Route::post('/maven/labstatus', [MavenPlayController::class, 'checkServerStatus'])->name('maven.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_GRPR)->group(function () {
        //grafana-prometheus
        Route::get('/grafana-prometheus', [GrafanaPlayController::class, 'index'])->name('grafana-prometheus');
        Route::get('/grafana-prometheus/provision', [GrafanaPlayController::class, 'provisionLab']);
        Route::post('/grafana-prometheus/labEnd', [GrafanaPlayController::class, 'endLab']);
        Route::post('/grafana-prometheus/labstatus', [GrafanaPlayController::class, 'checkServerStatus'])->name('grafana-prometheus.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_PODMAN)->group(function () {
        //podman
        Route::get('/podman', [PodmanPlayController::class, 'index'])->name('podman');
        Route::get('/podman/provision', [PodmanPlayController::class, 'provisionLab']);
        Route::post('/podman/labEnd', [PodmanPlayController::class, 'endLab']);
        Route::post('/podman/labstatus', [PodmanPlayController::class, 'checkServerStatus'])->name('podman.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_TERRAFORM)->group(function () {
        //terraform
        Route::get('/terraform', [TerraformPlayController::class, 'index'])->name('terraform');
        Route::get('/terraform/provision', [TerraformPlayController::class, 'provisionLab']);
        Route::post('/terraform/labEnd', [TerraformPlayController::class, 'endLab']);
        Route::post('/terraform/labstatus', [TerraformPlayController::class, 'checkServerStatus'])->name('terraform.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_ANSIBLE)->group(function () {
        //Ansible
        Route::get('/ansible', [AnsiblePlayController::class, 'index'])->name('ansible');
        Route::get('/ansible/provision', [AnsiblePlayController::class, 'provisionLab']);
        Route::post('/ansible/labEnd', [AnsiblePlayController::class, 'endLab']);
        Route::post('/ansible/labstatus', [AnsiblePlayController::class, 'checkServerStatus'])->name('ansible.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_CHEF)->group(function () {
        //Chef
        Route::get('/chef', [ChefPlayController::class, 'index'])->name('chef');
        Route::get('/chef/provision', [ChefPlayController::class, 'provisionLab']);
        Route::post('/chef/labEnd', [ChefPlayController::class, 'endLab']);
        Route::post('/chef/labstatus', [ChefPlayController::class, 'checkServerStatus'])->name('chef.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_K8SSN)->group(function () {
        //Kubernetes Single Node
        Route::get('/kubernetes-single-node', [KubernetesSingleNodeController::class, 'index'])->name('k8ssn');
        Route::get('/kubernetes-single-node/provision', [KubernetesSingleNodeController::class, 'provisionLab']);
        Route::post('/kubernetes-single-node/labEnd', [KubernetesSingleNodeController::class, 'endLab']);
        Route::post('/kubernetes-single-node/labstatus', [KubernetesSingleNodeController::class, 'checkServerStatus'])->name('k8ssn.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_K8SMN)->group(function () {
        //Kubernetes Multi Node
        Route::get('/kubernetes-multi-node', [KubernetesMultiNodeController::class, 'index'])->name('k8smn');
        Route::get('/kubernetes-multi-node/provision', [KubernetesMultiNodeController::class, 'provisionLab']);
        Route::post('/kubernetes-multi-node/labEnd', [KubernetesMultiNodeController::class, 'endLab']);
        Route::post('/kubernetes-multi-node/labstatus', [KubernetesMultiNodeController::class, 'checkServerStatus'])->name('k8smn.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_K8SMN)->group(function () {
        //Helm
        Route::get('/helm', [HelmController::class, 'index'])->name('helm');
        Route::get('/helm/provision', [HelmController::class, 'provisionLab']);
        Route::post('/helm/labEnd', [HelmController::class, 'endLab']);
        Route::post('/helm/labstatus', [HelmController::class, 'checkServerStatus'])->name('helm.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_GITLAB)->group(function () {
        // Gitlab
        Route::get('/gitlab', [GitlabPlayController::class, 'index'])->name('gitlab');
        Route::get('/gitlab/provision', [GitlabPlayController::class, 'provisionLab']);
        Route::post('/gitlab/labEnd', [GitlabPlayController::class, 'endLab']);
        Route::post('/gitlab/labstatus', [GitlabPlayController::class, 'checkServerStatus'])->name('gitlab.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_JENKINS)->group(function () {
        // Jenkins
        Route::get('/jenkins', [JenkinsPlayController::class, 'index'])->name('jenkins');
        Route::get('/jenkins/provision', [JenkinsPlayController::class, 'provisionLab']);
        Route::post('/jenkins/labEnd', [JenkinsPlayController::class, 'endLab']);
        Route::post('/jenkins/labstatus', [JenkinsPlayController::class, 'checkServerStatus'])->name('jenkins.lab.check');
    });

    Route::middleware('checkEnrollment:' . PlAYGD_ARGOCD)->group(function () {
        // ArgoCD
        Route::get('/argocd', [ArgoCdPlayController::class, 'index'])->name('argocd');
        Route::get('/argocd/provision', [ArgoCdPlayController::class, 'provisionLab']);
        Route::post('/argocd/labEnd', [ArgoCdPlayController::class, 'endLab']);
        Route::post('/argocd/labstatus', [ArgoCdPlayController::class, 'checkServerStatus'])->name('argocd.lab.check');
    });

    // test
    Route::get('/test', [TestPlayController::class, 'index'])->name('test');
});

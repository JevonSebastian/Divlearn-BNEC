<x-app-login title="login">
    <x-slot name="navbar">
        <div class="login-page bg-colour d-flex justify-content-center align-items-center">
            <div class="login-container container">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-12 py-3">
                        <div class="card shadow border-1" style="border-radius: 40px;">
                            <div class="card-body px-4 py-5 d-flex align-items-center justify-content-center">
                                <div class="col-10 py-4">
                                    <h2 class="text-center pt-3">Login</h2>
                                    <p class="register-text text-center pb-3">Don't have an account? <a href="{{ route('register')}}">Register
                                            here!</a></p>
                                    <form>
                                        <div class="mb-3">
                                            <label for="email-login" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email-login">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password-login" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password-login">
                                        </div>
                                        <div class="forgot-password pb-4">
                                            <p data-bs-toggle="modal" data-bs-target="#exampleModal">Forgot Password?<p>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn-submit btn btn-block btn-primary">Submit</button>
                                        </div>
    
                                    </form>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Forgot your Password?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3">
                        <p>Please type your email address below</p>
                        <form>
                            <div class="mb-3">
                                <label for="email-modal" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email-login">
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit"
                                    class="btn-submit btn btn-block btn-primary">Send Password Reset Link</button>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-login>
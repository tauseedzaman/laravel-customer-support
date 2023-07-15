@php
$id = env('CUSTOMER_SUPPORT_USER_ID');
$user = App\Models\User::find($id);
@endphp
<section class="visible avenue-messenger messenger-messagingView m-body">
    <div class="agent-face">
        <div class="half">
            <img class="avatar agent circle"
                src="{{ $user->avatar ? asset('storage/users-avatar/' . $user->avatar) : 'http://askavenue.com/img/17.jpg' }}"
                alt="Jesse Tino">
        </div>
    </div>
    <div class="chat">
        <div class="chat-title">
            <h1>{{ $user->name }}</h1>
            <h2>Customer Supprt</h2>
            <!--  <figure class="avatar">
        <img src="http://askavenue.com/img/17.jpg" /></figure>-->
        </div>
        <div class="messagess">
            <div class="m-body messages-container app-scroll messages-content" style="">
                <div id="messages">
                    <p class="message-hint center-el"><span>Say Hi, 👋</span></p>
                </div>
                {{-- Typing indicator --}}
                <div class="typing-indicator">
                    <div class="message-card typing">
                        <div class="message">
                            <span class="typing-dots">
                                <span class="dot dot-1"></span>
                                <span class="dot dot-2"></span>
                                <span class="dot dot-3"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="message-box">
            <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
                <textarea type="text" class="message-input m-send app-scroll" name="message" placeholder="Type message..."></textarea>
                {{-- this is the target user id to whom you will be chating with --}}
                <input type="hidden" name="id" value="{{ $id }}">
                @csrf
                <button type="submit" class="message-submit m-send app-scroll"
                    style="height: 28px !important">Send</button>
            </form>
        </div>
    </div>
</section>
<div class="fabs">
    <a id="prime" class="fab"><i class="prime zmdi zmdi-comment-outline"></i></a>
</div>

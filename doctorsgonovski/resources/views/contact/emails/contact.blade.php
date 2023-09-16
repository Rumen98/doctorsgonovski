<div class="email-container">

    <div class="email-content">

        <h2 class="email-header">Пациентова информация <i class="fas fa-notes-medical email-icon"></i></h2>

        <h3 class="email-subheader"><i class="fas fa-user email-icon"></i> Име: <span class="email-highlight">{{ $name }}</span></h3>

        <p class="email-text"><i class="fas fa-envelope email-icon"></i> <strong class="email-strong-text">Email:</strong> <span class="email-details">{{ $emailAddress }}</span></p>

        <p class="email-text"><i class="fas fa-stethoscope email-icon"></i> <strong class="email-strong-text">Причина:</strong> <span class="email-details">{{ $subject }}</span></p>

        <p class="email-message-header"><i class="fas fa-comment-alt email-icon"></i> <strong class="email-strong-text">Съобщение:</strong></p>

        <p class="email-message-body">{{ $messageBody }}</p>

    </div>
</div>

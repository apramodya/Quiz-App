import {Component, OnInit} from '@angular/core';
import {Router} from '@angular/router';
import {QuizService} from '../shared/quiz.service';

@Component({
  selector: 'app-quiz',
  templateUrl: './quiz.component.html',
  styleUrls: ['./quiz.component.css']
})
export class QuizComponent implements OnInit {

  constructor(private router: Router, private quizService: QuizService) {
  }

  ngOnInit() {
    this.quizService.seconds = 0;
    this.quizService.questionProgress = 0;
    this.quizService.getQuestions().subscribe(
      (data: any) => {
        this.quizService.questions = data;
        // this.startTimer();
      }
    );
  }

  startTimer() {
    this.quizService.timer = setInterval(() => {
      this.quizService.seconds++;
    }, 1000);
  }

  Answer(id, choice) {
    this.quizService.questions[this.quizService.questionProgress].answer = choice;
    this.quizService.questionProgress++;
    if (this.quizService.questionProgress === 10) {
      clearInterval(this.quizService.timer);
      this.router.navigate(['/result']);
    }
  }
}

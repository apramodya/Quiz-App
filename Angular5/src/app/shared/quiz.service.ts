import {Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';

@Injectable()
export class QuizService {
  // properties
  readonly rootUrl = 'http://127.0.0.1:8000/api/';
  questions: any[];
  seconds: number;
  timer;
  questionProgress: number;

  // helper methods
  constructor(private http: HttpClient) {
  }

  displayTimeElapsed() {
    return Math.floor(this.seconds / 3600) + ':' + Math.floor(this.seconds / 60) + ':' +  Math.floor(this.seconds % 60);
  }

  // http methods
  insertParticipant(name: string, email: string) {
    const body = {
      name: name,
      email: email
    };
    return this.http.post(this.rootUrl + 'participant', body);
  }

  getQuestions() {
    console.log(this.http.get(this.rootUrl + 'questions'));
    return this.http.get(this.rootUrl + 'questions');
  }


}
